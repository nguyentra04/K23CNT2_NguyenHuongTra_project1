<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class NHTHoaDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
        public function run()
        {
            DB::table('NHTHoaDon')->insert([
                [
                    'NHTMaHD' => 'HD001',
                    'NHTMaKH' => '87990555',
                    'NHTNgayHD' => '2025-01-01',
                    'NHTHoTenKH' => 'Jack Hane',
                    'NHTTongTriGia' => 150000,
                    'NHTTrangThai' => 1,
                ],
                [
                    'NHTMaHD' => 'HD002',
                    'NHTMaKH' => '260392148',
                    'NHTNgayHD' => '2025-01-02',
                    'NHTHoTenKH' => 'Brody Marks',
                    'NHTTongTriGia' => 230000,
                    'NHTTrangThai' => 0,
                ],
                [
                    'NHTMaHD' => 'HD003',
                    'NHTMaKH' => '368062916',
                    'NHTNgayHD' => '2025-01-03',
                    'NHTHoTenKH' => 'Cristian Treutel',
                    'NHTTongTriGia' => 50000,
                    'NHTTrangThai' => 1,
                ],
            ]);
        }
    }
