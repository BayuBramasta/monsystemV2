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
        Schema::create('tb_teknisi', function (Blueprint $table) {
            $table->integer("id_teknisi", true, false)->primary();
            $table->string("username", 255);
            $table->string("name", 255)->unique("name");
            $table->string("password", 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_teknisi');
    }
};
