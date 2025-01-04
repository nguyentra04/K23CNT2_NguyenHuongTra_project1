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
        Schema::create('NHTLoaiSanPham', function (Blueprint $table) {
            $table->id();
            $table->string('NHTMaLoai', 255)->unique();
            $table->string('NHTTenLoai', 255);
            $table->tinyInteger('NHTTrangThai');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NHTLoaiSanPham');
    }
};
