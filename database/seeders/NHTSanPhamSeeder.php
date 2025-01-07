<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class NHTSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    
    public function run(): void
    {
       
    
        DB::table('NHTSanPham')->insert([
            'NHTMaSP' => 'V01',
            'NHTTenSP' => 'Vở kẻ ngang 120 trang',
            'NHTHinhAnh' => 'images/VKN01.jpg',
            'NHTMoTa' => 'Vở kẻ ngang loại 120 trang dùng cho học sinh.',
            'NHTDonGia' => 12000,
            'NHTSoLuong' => 10,
            'NHTMaLoai' => 'V120',
            'NHTTrangThai' => 0,

        ]);
        
        DB::table('NHTSanPham')->insert([
            'NHTMaSP'=>'V02',
            'NHTTenSP'=>'Vở kẻ ngang 80 trang',
            'NHTHinhAnh'=>'images/VKN02.jpg',
            'NHTMoTa'=>'Vở kẻ ngang 80 trang',
            'NHTDonGia'=>12000,
            'NHTSoLuong'=>100,
            'NHTMaLoai'=>'V80',
            'NHTTrangThai'=>0,
        ]);
        DB::table('NHTSanPham')->insert([
            'NHTMaSP'=>'S01',
            'NHTTenSP'=>'Sổ tay khổ A5',
            'NHTHinhAnh'=>'images/ST01.jpg',
            'NHTMoTa'=>'Sổ tay khổ A5',
            'NHTDonGia'=>55000,
            'NHTSoLuong'=>100,
            'NHTMaLoai'=>'S01',
            'NHTTrangThai'=>0,
        ]);
        DB::table('NHTSanPham')->insert([
            'NHTMaSP'=>'S02',
            'NHTTenSP'=>'Sổ tay khổ A4',
            'NHTHinhAnh'=>'images/ST02.jpg',
            'NHTMoTa'=>'Sổ viết khổ A4',
            'NHTDonGia'=>65000,
            'NHTSoLuong'=>100,
            'NHTMaLoai'=>'S02',
            'NHTTrangThai'=>0,
        ]);
        DB::table('NHTSanPham')->insert([
            'NHTMaSP'=>'S03',
            'NHTTenSP'=>'Sổ tay khổ A3',
            'NHTHinhAnh'=>'images/ST03.jpg',
            'NHTMoTa'=>'Sổ viết khổ A5',
            'NHTDonGia'=>85000,
            'NHTSoLuong'=>100,
            'NHTMaLoai'=>'S02',
            'NHTTrangThai'=>0,
        ]);
        DB::table('NHTSanPham')->insert([
            'NHTMaSP'=>'P01',
            'NHTTenSP'=>'Sổ Planner 2024',
            'NHTHinhAnh'=>'images/PL01.jpg',
            'NHTMoTa'=>'Sổ Planner 2024',
            'NHTDonGia'=>95000,
            'NHTSoLuong'=>100,
            'NHTMaLoai'=>'PL01',
            'NHTTrangThai'=>0,
        ]);
        DB::table('NHTSanPham')->insert([
            'NHTMaSP'=>'P02',
            'NHTTenSP'=>'Sổ planner 2024',
            'NHTHinhAnh'=>'images/PL02.jpg',
            'NHTMoTa'=>'Sổ Planner 2024',
            'NHTDonGia'=>105000,
            'NHTSoLuong'=>100,
            'NHTMaLoai'=>'PL02',
            'NHTTrangThai'=>0,
        ]);
        DB::table('NHTSanPham')->insert([
            'NHTMaSP'=>'P03',
            'NHTTenSP'=>'Sổ planner 2025',
            'NHTHinhAnh'=>'images/PL03.jpg',
            'NHTMoTa'=>'Sổ Planner 2025',
            'NHTDonGia'=>115000,
            'NHTSoLuong'=>100,
            'NHTMaLoai'=>'PL03',
            'NHTTrangThai'=>0,
        ]);
        DB::table('NHTSanPham')->insert([
            'NHTMaSP'=>'P04',
            'NHTTenSP'=>'Sổ Planner 2025',
            'NHTHinhAnh'=>'images/PL04.jpg',
            'NHTMoTa'=>'Sổ Planner 2026',
            'NHTDonGia'=>125000,
            'NHTSoLuong'=>100,
            'NHTMaLoai'=>'PL04',
            'NHTTrangThai'=>0,
        ]);

    }
}
