<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\NHT_SanPham;

class NHTHomeController extends Controller
{

    // Trang chủ (hiển thị sản phẩm)
    public function NHTindex()
    {
        // Lấy tất cả sản phẩm từ cơ sở dữ liệu
        $nhtsp = NHT_SanPham::all();
        return view('NHTadmins.NHTHome.NHTindex', compact('nhtsp'));
    }

    // Các trang khác
    public function NHTservices()
    {
        return view('NHTadmins.NHTHome.NHTservices');
    }

    public function NHTabout()
    {
        return view('NHTadmins.NHTHome.NHTabout');
    }

    public function NHTcontact()
    {
        return view('NHTadmins.NHTHome.NHTcontact');
    }
    public function show($id)
    {
        $nhtsp = NHT_SanPham::find($id);

        if (!$nhtsp) {
            return redirect()->route('NHTadmins.NHTHome.NHTindex')->with('error', 'Sản phẩm không tồn tại.');
        }

        return view('NHTadmins.NHTHome.NHTShow', compact('nhtsp'));
    }
}

    



