<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NHTCTHoaDon extends Model
{
    use HasFactory;
    protected $table = 'NHTCTHoaDon';

    protected $fillable = [
        'NHTHoaDonID',
        'NHTSanPhamID',
        'NHTSoLuongMua',
        'NHTDonGiaMua',
        'NHTThanhTien',
        'NHTTrangThai',
    ];

    // Mối quan hệ với bảng NHTHoaDon
    public function NHTHoaDon()
    {
        return $this->belongsTo(NHTHoaDon::class, 'NHTHoaDonID', 'id');
    }

    // Mối quan hệ với bảng NHT_SanPham
    public function NHTSanPham()
    {
        return $this->belongsTo(NHT_SanPham::class, 'NHTSanPhamID', 'id');
    }
}
