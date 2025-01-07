<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NHTLoaiSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('NHTLoaiSanPham')->insert([
            'NHTMaLoai'=>'VKN120',
            'NHTTenLoai'=>'Vở kẻ ngang 120 trang',
            'NHTTrangThai'=>0,
        ]);
        DB::table('NHTLoaiSanPham')->insert([
            'NHTMaLoai'=>'VKN80',
            'NHTTenLoai'=>'Vở kẻ ngang 80 trang ',
            'NHTTrangThai'=>0,
        ]);
        DB::table('NHTLoaiSanPham')->insert([
            'NHTMaLoai'=>'ST001',
            'NHTTenLoai'=>'Sổ tay khổ A5 ',
            'NHTTrangThai'=>0,
        ]);
        DB::table('NHTLoaiSanPham')->insert([
            'NHTMaLoai'=>'ST002',
            'NHTTenLoai'=>'Sổ tay khổ A4',
            'NHTTrangThai'=>0,
        ]);
        DB::table('NHTLoaiSanPham')->insert([
            'NHTMaLoai'=>'PLN01',
            'NHTTenLoai'=>'Planner 2025',
            'NHTTrangThai'=>0,
        ]);
        DB::table('NHTLoaiSanPham')->insert([
            'NHTMaLoai'=>'PLN02',
            'NHTTenLoai'=>'Planner 2024',
            'NHTTrangThai'=>0,
        ]);
    }
}
