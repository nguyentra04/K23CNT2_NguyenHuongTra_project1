<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use app\models\NHT_SanPham;
use app\models\NHTCTHoaDon;
use app\models\NHTHoaDon;
use Illuminate\Http\Request;

class NHTDashboardController extends Controller
{
    public function index()
{
    // Tính toán dữ liệu cho dashboard tự động
    $nhtsp = NHT_SanPham::count(); 
    $NHTHoaDon = NHTHoaDon::count(); 
    $NHTCTHoaDon = NHTCTHoaDon::count();

    // Trả về view dashboard với dữ liệu
    return view('NHTadmins.NHTAuth.NHTDashboard', compact('nhtsp', 'NHTHoaDon', 'NHTCTHoaDon'));
}

}
