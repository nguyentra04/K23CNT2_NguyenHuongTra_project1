<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NHTCTHoaDon extends Model
{
    use HasFactory;
    protected $table = 'NHTCTHoaDon';
    protected $primaryKey = 'NHTCTHoaDonID';
    protected $fillable = [
        'NHTHoaDonID',
        'NHTSanPhamID',
        'NHTSoLuongMua',
        'NHTDonGiaMua',
        'NHTThanhTien',
        'NHTTrangThai',
    ];

    public function NHTHoaDon()
    {
        return $this->belongsTo(NHTHoaDon::class, 'NHTHoaDonID');
    }

    public function NHTSanPham()
    {
        return $this->belongsTo(NHT_SanPham::class, 'NHTSanPhamID');
    }
}
