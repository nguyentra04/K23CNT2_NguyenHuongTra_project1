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
            $table->string('NHTHoaDonID');
            $table->foreign('NHTHoaDonID')->references('id')->on('NHTHoaDon')->onDelete('cascade');
            $table->string('NHTSanPhamID');
            $table->foreign('NHTSanPhamID')->references('id')->on('NHTSanPham')->onDelete('cascade');
            $table->float('NHTSoLuongMua');
            $table->float('NHTDonGiaMua');
            $table->float('NHTThanhTien');
            $table->tinyInteger('NHTTrangThai')->default(1);
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
