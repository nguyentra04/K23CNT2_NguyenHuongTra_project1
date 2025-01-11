<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class NHTQuanTriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create();
        for ($i = 1; $i <= 10; $i++) {
            DB::table('NHTQuanTri')->insert([
                'NHTTaiKhoan' => $faker->unique()->userName(),
                'NHTMatKhau' => bcrypt($this->generatePassword()),
                'NHTGioiTinh' => $faker->randomElement(['Nam', 'Nữ']),
                'NHTChucVu' => $faker->randomElement(['Quản trị viên', 'Nhân viên']),
                'NHTTrangThai' => $faker->randomElement([1, 0]),
            ]);
            DB::table('NHTQuanTri')->insert([
                 'NHTTaiKhoan' => $faker->unique()->userName(),
                 'NHTMatKhau' => bcrypt($this->generatePassword()),
                 'NHTGioiTinh' => $faker->randomElement(['Nam', 'Nữ']),
                 'NHTChucVu' => $faker->randomElement(['Quản trị viên', 'Nhân viên']),
                 'NHTTrangThai' => $faker->randomElement([1, 0]),
            ]);
            DB::table('NHTQuanTri')->insert([
                 'NHTTaiKhoan' => $faker->unique()->userName(),
                 'NHTMatKhau' => bcrypt($this->generatePassword()),
                 'NHTGioiTinh' => $faker->randomElement(['Nam', 'Nữ']),
                 'NHTChucVu' => $faker->randomElement(['Quản trị viên', 'Nhân viên']),
                 'NHTTrangThai' => $faker->randomElement([1, 0]),
            ]);
            DB::table('NHTQuanTri')->insert([
                'NHTTaiKhoan' => $faker->unique()->userName(),
                'NHTMatKhau' => bcrypt($this->generatePassword()),
                'NHTGioiTinh' => $faker->randomElement(['Nam', 'Nữ']),
                'NHTChucVu' => $faker->randomElement(['Quản trị viên', 'Nhân viên']),
                'NHTTrangThai' => $faker->randomElement([1, 0]),
           ]);
           DB::table('NHTQuanTri')->insert([
            'NHTTaiKhoan' => $faker->unique()->userName(),
            'NHTMatKhau' => bcrypt($this->generatePassword()),
            'NHTGioiTinh' => $faker->randomElement(['Nam', 'Nữ']),
            'NHTChucVu' => $faker->randomElement(['Quản trị viên', 'Nhân viên']),
            'NHTTrangThai' => $faker->randomElement([1, 0]),
            ]);
        }
}
    private function generatePassword(): string
        {
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
            $password = '';
            $length = rand(8, 12); // Generate a password between 8 and 12 characters

            for ($i = 0; $i < $length; $i++) {
                $password .= $characters[rand(0, strlen($characters) - 1)];
            }

            return $password;
        }
}
