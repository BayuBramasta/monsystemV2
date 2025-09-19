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
        Schema::create('tb_peminjaman', function (Blueprint $table) {
            $table->integer("id_peminjaman", true, false)->primary();
            $table->string("nama_mahasiswa", 255);
            $table->string("nrp", 100);
            $table->string("telp_mahasiswa", 100);
            $table->string("pembimbing", 255);
            $table->integer("id_komputer")->index('id_komputer_peminjaman');
            $table->text("softwere");
            $table->enum("status", array('diterima', 'menunggu', 'ditolak'))->default('menunggu');
            $table->timestamp("created_at")->useCurrent();
            $table->date("tanggal_running");
            $table->date("tanggal_selesai");
            $table->string("bukti_running", 255);
            $table->string("bukti_selesai", 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_peminjaman');
    }
};
