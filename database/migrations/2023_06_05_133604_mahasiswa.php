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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nim',15)->unique()->nullable(false);
            $table->string('no_hp',20)->nullable(true);
            $table->foreignId('prodi_id');
            $table->foreignId('user_id');
            $table->string('alamat',255)->nullable(true);
            $table->integer('jenis_kelamin')->max(1)->nullable(true);
            $table->integer('status')->max(1)->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};