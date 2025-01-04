<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NHTCTHoaDonSeeder extends Seeder
{
    public function run()
    {
        DB::table('NHTCTHoaDon')->insert([
            [
                'NHTHoaDonID' => 001,
                'NHTSanPhamID' => 01,
                'NHTSoLuongMua' => 2,
                'NHTDonGiaMua' => 150000.00,
                'NHTThanhTien' => 300000.00 ,
                'NHTTrangThai' => 1,
            ],
            [
                'NHTHoaDonID' => 002,
                'NHTSanPhamID' => 02,
                'NHTSoLuongMua' => 1,
                'NHTDonGiaMua' => 230000,
                'NHTThanhTien' => 230000,
                'NHTTrangThai' => 1,
            ],
            [
                'NHTHoaDonID' => 003,
                'NHTSanPhamID' => 03,
                'NHTSoLuongMua' => 3,
                'NHTDonGiaMua' => 50000,
                'NHTThanhTien' => 150000,
                'NHTTrangThai' => 0,
            ],
    
        ]);
    }
}
