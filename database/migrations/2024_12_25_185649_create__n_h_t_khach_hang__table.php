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
        Schema::create('NHTKhachHang', function (Blueprint $table) {
            $table->id();
            $table->string('NHTMaKH',255)->unique();
            $table->string('NHTTenKH',255);
            $table->string('NHTDiaChi',255)->nullable();
            $table->string('NHTSDT',255)->nullable();
            $table->string('NHTEmail',255)->nullable();
            $table->date('NHTNgaySinh')->nullable();
            $table->enum('NHTGioiTinh', ['Nam', 'Nữ']);
            $table->tinyInteger('NHTTrangThai');
            $table->rememberToken();//ghi nhớ đăng nhập
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NHTKhachHang');
    }
};
