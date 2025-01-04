<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NHTKhachHang extends Model
{
    use HasFactory;

    protected $table = 'NHTKhachHang'; // Tên bảng trong cơ sở dữ liệu
    // protected $fillable = [
    //     'NHTMaKH',
    //     'NHTTenKH',
    //     'NHTDiaChi',
    //     'NHTSDT',
    //     'NHTEmail',
    //     'NHTNgaySinh',
    //     'NHTGioiTinh',
    //     'NHTTrangThai',
    // ];
}

