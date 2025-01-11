<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NHT_SanPham extends Model
{
    use HasFactory;
    protected $table = 'NHTSanPham';
    protected $primaryKey = 'NHTMaSP';
    protected $fillable = [
        'NHTMaSP',
        'NHTTenSP',
        'NHTHinhAnh',
        'NHTMoTa',
        'NHTDonGia',
        'NHTSoLuong',
        'NHTMaLoai',
        'NHTTrangThai'
    ];
    public function NHT_Loai_SP()
    {
        return $this->belongsTo(NHT_Loai_SP::class, 'NHTMaLoai', 'id');
    }

}
