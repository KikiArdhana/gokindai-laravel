<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransaksiResource\Pages;
use App\Models\Transaksi;
use App\Models\Pegawai;
use App\Models\Member;
use App\Models\Menu;
use App\Models\Poin;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class TransaksiResource extends Resource
{
    protected static ?string $model = Transaksi::class;
    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';
    protected static ?string $navigationLabel = 'Transaksi';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                // Urutkan Pegawai terlebih dahulu
                Select::make('id_pegawai')
                    ->label('Pegawai')
                    ->relationship('pegawai', 'nama_kasir')
                    ->placeholder('Pilih nama pegawai')
                    ->required()
                    ->columns(1),

                // Member, opsional
                Select::make('id_pelanggan')
                    ->label('Pelanggan')
                    ->relationship('member', 'nama_pelanggan')
                    ->placeholder('Pilih jika ada')
                    ->searchable()
                    ->columnSpan(0.5),

                // Tanggal Transaksi (otomatis hari ini)
               

                // Repeater untuk Produk dan Kuantitas
                Repeater::make('menu_items')
                    ->label('Produk')
                    ->schema([
                        Select::make('id_item')
                            ->label('Nama Produk')
                            ->searchable()
                            ->options(Menu::all()->pluck('nama_item', 'id_item')->toArray())
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(function ($state, callable $get, callable $set) {
                                $menu = Menu::find($state);
                                $harga = $menu ? $menu->harga : 0;
                                $set('harga', $harga);

                                $quantity = $get('quantity') ?? 1;
                                $set('total_harga', $harga * $quantity);
                            }),

                        TextInput::make('quantity')
                            ->label('Jumlah')
                            ->numeric()
                            ->default(1)
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(function ($state, callable $get, callable $set) {
                                $set('total_harga', $get('harga') * $state);
                            }),

                        TextInput::make('harga')
                            ->label('Harga Satuan')
                            ->numeric()
                            ->disabled(),

                        TextInput::make('total_harga')
                            ->label('Total Harga')
                            ->numeric()
                            ->disabled(),
                    ])
                    ->columns(2)
                    ->createItemButtonLabel('Tambah Produk')
                    ->reactive()
                    ->afterStateUpdated(function (callable $set, $state) {
                        $total = collect($state)->sum(fn($item) => $item['total_harga'] ?? 0);
                        $set('total_pembelian', $total);
                    })
                    ->columnSpan(2),

                // Total Pembelian, dihitung otomatis
                TextInput::make('total_pembelian')
                    ->label('Total Pembelian')
                    ->numeric()
                    ->disabled()
                    ->afterStateHydrated(function (callable $set, $state) {
                        $total = collect($state['menu_items'] ?? [])->sum(fn($item) => $item['total_harga'] ?? 0);
                        $set('total_pembelian', $total);
                    })
                    ->columnSpan(3),

                // Pilihan Metode Pembayaran
                Select::make('metode_pembayaran')
                    ->label('Metode Pembayaran')
                    ->options([
                        'cash' => 'Cash',
                        'credit' => 'Credit',
                        'debit' => 'Debit',
                    ])
                    ->required()
                    ->columnSpan(3),

                    DatePicker::make('tanggal_transaksi')
                    ->label('Tanggal Transaksi')
                    ->default(Carbon::today())
                    ->required()
                    ->columnSpan(3),
            ])
            ->columns(2);  // Menggunakan dua kolom untuk layout yang lebih rapi
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pegawai.nama_kasir')
                    ->label('Pegawai')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('member.nama_pelanggan')
                    ->label('Pelanggan')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('tanggal_transaksi')
                    ->label('Tanggal')
                    ->date()
                    ->sortable(),

                TextColumn::make('total_pembelian')
                    ->label('Total Pembelian')
                    ->money('IDR')
                    ->sortable(),

                TextColumn::make('metode_pembayaran')
                    ->label('Metode Pembayaran')
                    ->sortable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTransaksis::route('/'),
            'create' => Pages\CreateTransaksi::route('/create'),
            'edit' => Pages\EditTransaksi::route('/{record}/edit'),
        ];
    }

    protected static function afterCreate(Model $record): void
    {
        $poin = floor($record->total_pembelian / 1000);
        $member = Member::find($record->id_pelanggan);

        if ($poin > 0 && $member) {
            $member->increment('poin', $poin);
            $member->save();

            Poin::create([
                'id_pelanggan' => $member->id_pelanggan,
                'poin' => $poin,
                'tanggal' => $record->tanggal_transaksi,
            ]);
        }
    }
}