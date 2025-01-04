<?php

namespace App\Http\Controllers;

use App\Models\NHT_Loai_SP;
use Illuminate\Http\Request;

class NHTLoaiSanPhamController extends Controller
{
    // List all product categories
    public function NHTList()
    {
        $nhtloaisps = NHT_Loai_SP::all();
        return view('NHTadmins.NHTLoaiSanPham.NHTList', ['nhtloaisps' => $nhtloaisps]);
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

        $nhtloaisps = new NHT_Loai_SP();
        $nhtloaisps->NHTMaLoai = $request->input('NHTMaLoai');
        $nhtloaisps->NHTTenLoai = $request->input('NHTTenLoai');
        $nhtloaisps->NHTTrangThai = $request->input('NHTTrangThai');
        $nhtloaisps->save();
        return redirect()->route('NHTLoaiSanPham.NHTList');
    }
    public function NHTEdit($id)
    {
        return view('NHTadmins.NHTLoaiSanPham.NHTEdit',['nhtloaisps'=>$nhtloaisps]);
    }
    public function NHTEditSubmit(Request $request, $id)
    {
        $validatedData = $request->validate([
            'NHTMaLoai' => 'required',
            'NHTTenLoai' => 'required',
            'NHTTrangThai' => 'required',
        ]);
        $nhtloaisps = NHT_Loai_SP::find($id);
        $nhtloaisps->NHTMaLoai = $request->input('NHTMaLoai');
        $nhtloaisps->NHTTenLoai = $request->input('NHTTenLoai');
        $nhtloaisps->NHTTrangThai = $request->input('NHTTrangThai');
        $nhtloaisps->save();
        return redirect()->route('NHTadmins.NHTLoaiSanPham.NHTList');
    }
    public function NHTDelete($id)
    {
        $nhtloaisps = NHT_Loai_SP::find($id);
        $nhtloaisps->delete();
        return redirect()->route('NHTadmins.NHTLoaiSanPham.NHTList');
    }
}