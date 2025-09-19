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
        Schema::create('tb_komputer', function (Blueprint $table) {
            $table->integer("id_komputer", true, false)->primary();
            $table->integer("id_lab")->index("id_lab");
            $table->enum("status", array('running', 'idle'))->default('idle');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_komputer');
    }
};
