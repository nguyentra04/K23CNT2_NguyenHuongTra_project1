<?php

namespace App\Http\Controllers;

use App\Models\NHT_Loai_SP;
use Illuminate\Http\Request;

class NHTLoaiSanPhamController extends Controller
{
    // List all product categories
    public function NHTList()
    {
        $nhtloaisp = NHT_Loai_SP::all();
        return view('NHTadmins.NHTLoaiSanPham.NHTList', compact('nhtloaisp'));
    }

    // Show the create product category form
    public function NHTCreate()
    {
        return view('NHTadmins.NHTLoaiSanPham.NHTCreate');
    }
    public function NHTCreateSubmit(Request $request)
    {
        $validatedData = $request->validate([
            'NHTMaLoai' => 'required',
            'NHTTenLoai' => 'required',
            'NHTTrangThai' => 'required',
        ]);

        $nhtloaisp = new NHT_Loai_SP();
        $nhtloaisp->NHTMaLoai = $request->input('NHTMaLoai');
        $nhtloaisp->NHTTenLoai = $request->input('NHTTenLoai');
        $nhtloaisp->NHTTrangThai = $request->input('NHTTrangThai');
        $nhtloaisp->save();
        return redirect()->route('NHTLoaiSanPham.NHTList');
    }
    public function NHTEdit($id)
    {
        return view('NHTadmins.NHTLoaiSanPham.NHTEdit', compact('nhtloaisp'));
    }
    public function NHTEditSubmit(Request $request, $id)
    {
        $validatedData = $request->validate([
            'NHTMaLoai' => 'required',
            'NHTTenLoai' => 'required',
            'NHTTrangThai' => 'required',
        ]);
        $nhtloaisp = NHT_Loai_SP::find($id);
        $nhtloaisp->NHTMaLoai = $request->input('NHTMaLoai');
        $nhtloaisp->NHTTenLoai = $request->input('NHTTenLoai');
        $nhtloaisp->NHTTrangThai = $request->input('NHTTrangThai');
        $nhtloaisp->save();
        return redirect()->route('NHTadmins.NHTLoaiSanPham.NHTList');
    }
    public function NHTDelete($id)
    {
        $nhtloaisp = NHT_Loai_SP::find($id);
        $nhtloaisp->delete();
        return redirect()->route('NHTadmins.NHTLoaiSanPham.NHTList');
    }
}