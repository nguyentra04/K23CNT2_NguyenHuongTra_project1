<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NHTHoaDon extends Model
{
    use HasFactory;
    protected $table = 'NHTHoaDon';
    protected $primaryKey = 'NHTMaHD';
    protected $fillable = [
       'NHTMaHD','NHTMaKH','NHTNgayHD','NHTHoTenKH','NHTTongTriGia','NHTTrangThai'
    ];
    public function NHTKhachHang()
    {
        return $this->belongsTo(NHTKhachHang::class, 'NHTMaKH', 'id','NHTTenKH');
    }


}
