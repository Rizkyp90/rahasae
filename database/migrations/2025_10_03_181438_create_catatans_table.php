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
        Schema::create('catatans', function (Blueprint $table) {
            $table->id(); // Kolom ID unik untuk setiap catatan
            $table->string('penerima_tipe'); // Menyimpan tipe penerima (misal: 'pasangan', 'sahabat')
            $table->string('penerima_nama'); // Menyimpan nama yang diinput (misal: 'Ayah', 'Budi')
            $table->text('pesan'); // Kolom untuk isi pesan yang panjang
            $table->string('pengirim_nama')->nullable()->default('Anonim'); // Nama pengirim, boleh kosong dan defaultnya 'Anonim'
            $table->string('kode_unik')->unique(); // Kode unik untuk mencari/membagikan catatan
            $table->timestamps(); // Otomatis membuat kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catatans');
    }
};
