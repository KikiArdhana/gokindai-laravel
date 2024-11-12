<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_diskon_table.php
public function up()
{
    Schema::create('diskon', function (Blueprint $table) {
        $table->increments('id_promo');
        $table->decimal('syarat_pembelian', 10, 2);
        $table->decimal('diskon', 5, 2); // Untuk nilai persentase atau nominal diskon
        $table->string('nama_promo');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diskon');
    }
};
