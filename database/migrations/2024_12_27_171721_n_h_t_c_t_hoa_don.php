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
        Schema::create('NHTCTHoaDon', function (Blueprint $table) {
            $table->id();
            $table->string('NHTHoaDonID')->referenses('id')->on('NHTHoaDon');
            $table->string('NHTSanPhamID')->referenses('id')->on('NHTSanPham');
            $table->float('NHTSoLuongMua');
            $table->float('NHTDonGiaMua');
            $table->float('NHTThanhTien');
            $table->tinyInteger('NHTTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NHTCTHoaDon');
    }
};
