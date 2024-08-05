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
        Schema::create('penerbangan', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_penerbangan')->nullable();
            $table->string('jam_terbang')->nullable();
            $table->string('kode_penerbangan')->nullable();
            $table->enum('asal', ['CGK', 'SUB']);
            $table->enum('tujuan', ['CGK', 'SUB']);
            $table->string('terminal')->nullable();
            $table->string('pengingat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penerbangan');
    }
};
