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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->string('nip', 20)->primary();
            $table->enum('gender', ['Laki-laki','Perempuan']);
            $table->string('tmp_lahir', 45);
            $table->date('tgl_lahir');
            $table->string('telpon', 20);
            $table->string('alamat', 100);
            $table->foreignId('divisi_id')->constrained('divisis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
