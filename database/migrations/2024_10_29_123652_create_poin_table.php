<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_poin_table.php
public function up()
{
    Schema::create('poin', function (Blueprint $table) {
        $table->increments('id_poin');
        $table->integer('jumlah_poin');
        $table->date('tanggal_diberikan');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poin');
    }
};
