<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stoks', function (Blueprint $table) {
            $table->id();
            $table->integer('kode');
            $table->String('nama');
            $table->integer('idsatuan');
            $table->integer('idkategori');
            $table->bigInteger('saldoawal');
            $table->bigInteger('hargabeli');
            $table->bigInteger('hargajual');
            $table->bigInteger('hargamodal');
            $table->longText('foto');
            $table->Text('desk');
            $table->String('pajang');
            $table->bigInteger('saldoakhir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stoks');
    }
};
