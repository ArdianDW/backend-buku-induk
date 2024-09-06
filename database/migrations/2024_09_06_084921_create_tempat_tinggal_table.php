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
        Schema::create('tempat_tinggal', function (Blueprint $table) {
            $table->id();
            $table->string('alamat');
            $table->string('no_telp');
            $table->enum('tinggal_bersama', ['orang tua', 'saudara', 'wali', 'lainnya']);
            $table->string('jarak_ke_sekolah')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tempat_tinggal');
    }
};
