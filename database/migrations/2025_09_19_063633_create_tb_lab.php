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
        Schema::create('tb_lab', function (Blueprint $table) {
            $table->integer("id_lab", true, false)->primary();
            $table->string("nama_lab", 255)->unique("nama_lab");
            $table->integer("jumlah_komputer");
            $table->integer("id_teknisi")->index("id_teknisi");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_lab');
    }
};
