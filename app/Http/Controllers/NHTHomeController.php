<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NHT_SanPham;

class NHTHomeController extends Controller
{
    /**
     * Hiển thị danh sách sản phẩm.
     */
    public function NHTindex()
    {
        // Lấy tất cả sản phẩm từ cơ sở dữ liệu
        $nhtsp = NHT_SanPham::all();

        // Trả về view với danh sách sản phẩm
        return view('NHTadmins.NHTHome.NHTindex', compact('nhtsp'));
    }

    /**
     * Hiển thị dịch vụ.
     */
    public function NHTservices()
    {
        return view('NHTadmins.NHTHome.NHTservices');
    }

    /**
     * Hiển thị trang giới thiệu.
     */
    public function NHTabout()
    {
        return view('NHTadmins.NHTHome.NHTabout');
    }

    /**
     * Hiển thị trang liên hệ.
     */
    public function NHTcontact()
    {
        return view('NHTadmins.NHTHome.NHTcontact');
    }

    /**
     * Hiển thị chi tiết một sản phẩm.
     */
    public function NHTShow($id)
    {
        // Tìm sản phẩm theo ID
        $nhtsp = NHT_SanPham::find($id);

        // Nếu không tìm thấy sản phẩm, trả về trang lỗi hoặc thông báo
        if (!$nhtsp) {
            return redirect()->route('NHTadmins.NHTHome.NHTindex')->with('error', 'Sản phẩm không tồn tại.');
        }

        // Trả về view với thông tin sản phẩm
        return view('NHTadmins.NHTHome.NHTShow', compact('nhtsp'));
    }

}
