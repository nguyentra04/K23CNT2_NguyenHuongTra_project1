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
                'NHTHoaDonID' => 'HD001',
                'NHTSanPhamID' => 'VKN01',
                'NHTSoLuongMua' => 2,
                'NHTDonGiaMua' => 150000.00,
                'NHTThanhTien' => 300000.00 ,
                'NHTTrangThai' => 1,
            ],
            [
                'NHTHoaDonID' =>"HD002",
                'NHTSanPhamID' => "VKN02",
                'NHTSoLuongMua' => 1,
                'NHTDonGiaMua' => 230000,
                'NHTThanhTien' => 230000,
                'NHTTrangThai' => 1,
            ],
            [
                'NHTHoaDonID' => "HD003",
                'NHTSanPhamID' => "ST01",
                'NHTSoLuongMua' => 3,
                'NHTDonGiaMua' => 50000,
                'NHTThanhTien' => 150000,
                'NHTTrangThai' => 0,
            ],
    
        ]);
    }
}
