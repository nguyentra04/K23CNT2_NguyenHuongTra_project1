<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use faker\Factory as faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NHTKhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create();
        for ($i = 1; $i <= 10; $i++) {
            DB::table('NHTKhachHang')->insert([
                'NHTMaKH' => $faker->unique()->randomNumber($nbDigits = 8, $strict = false),
                'NHTTenKH' => $faker->name(),
                'NHTDiaChi' => $faker->address(200),
                'NHTSDT' => $faker->phoneNumber(10),
                'NHTEmail' => $faker->email(25),
                'NHTNgaySinh' => $faker->date($format = 'Y-m-d', $max = '2022-12-31'),
                'NHTGioiTinh' => $faker->randomElement(['Nam', 'Nu']),
                'NHTTrangThai' => $faker->randomElement(['1', '0']),
            ]);
            DB::table('NHTKhachHang')->insert([
                'NHTMaKH' => $faker->unique()->randomNumber($nbDigits = 8, $strict = false),
                'NHTTenKH' => $faker->name(),
                'NHTDiaChi' => $faker->address(200),
                'NHTSDT' => $faker->phoneNumber(10),
                'NHTEmail' => $faker->email(25),
                'NHTNgaySinh' => $faker->date($format = 'Y-m-d', $max = '2022-12-31'),
                'NHTGioiTinh' => $faker->randomElement(['Nam', 'Nu']),
                'NHTTrangThai' => $faker->randomElement(['1', '0']),
            ]);
            DB::table('NHTKhachHang')->insert([
                'NHTMaKH' => $faker->unique()->randomNumber($nbDigits = 8, $strict = false),
                'NHTTenKH' => $faker->name(),
                'NHTDiaChi' => $faker->address(200),
                'NHTSDT' => $faker->phoneNumber(10),
                'NHTEmail' => $faker->email(25),
                'NHTNgaySinh' => $faker->date($format = 'Y-m-d', $max = '2022-12-31'),
                'NHTGioiTinh' => $faker->randomElement(['Nam', 'Nu']),
                'NHTTrangThai' => $faker->randomElement(['1', '0']),
            ]);
        }
    }
}
