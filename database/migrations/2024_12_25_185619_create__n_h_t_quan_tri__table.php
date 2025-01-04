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
        Schema::create('NHTQuanTri', function (Blueprint $table) {
            $table->id();
            $table->string('NHTTaiKhoan', 250)->unique();
            $table->string('NHTMatKhau', 250);
            $table->string('NHTGioiTinh', 250);
            $table->text('NHTChucVu', 250);
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
        Schema::dropIfExists('NHTQuanTri');
    }
};
