<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NHTQuanTriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('NHTQuanTri')->insert([
            'NHTTaiKhoan' => 'admin1',
            'NHTMatKhau' =>bcrypt($this->generatePassword()),
            'NHTGioiTinh' => 'Nam',
            'NHTChucVu' => 'Quản trị viên',
            'NHTTrangThai' => 1,
            ]);
        
        DB::table('NHTQuanTri')->insert([
            'NHTTaiKhoan' => 'admin2',
            'NHTMatKhau' => bcrypt($this->generatePassword()),
            'NHTGioiTinh' => 'Nữ',
            'NHTChucVu' => 'Nhân viên',
            'NHTTrangThai' => 1,
        ]);

        DB::table('NHTQuanTri')->insert([
            'NHTTaiKhoan' => 'admin3',
            'NHTMatKhau' => bcrypt($this->generatePassword()),
            'NHTGioiTinh' => 'Nam',
            'NHTChucVu' => 'Quản trị viên',
            'NHTTrangThai' => 1,
        ]);
    }
    private function generatePassword(): string
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
        $password = '';
        $length = 10; // Độ dài mật khẩu cần để tạo

        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $password;
    }
}
