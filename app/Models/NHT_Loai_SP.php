<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NHT_Loai_SP extends Model
{
    use HasFactory;
    protected $table = 'NHTLoaiSanPham';
    protected $primaryKey = 'NHTMaLoai';
    protected $fillable = ['NHTMaLoai', 'NHTTenLoai', 'NHTTrangThai'];
}
