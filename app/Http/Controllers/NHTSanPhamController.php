<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NHT_SanPham;
use App\Models\NHT_Loai_SP;
use Illuminate\Support\Facades\Storage;

class NHTSanPhamController extends Controller
{
    // List of products
    public function NHTList()
    {
        $nhtsp = NHT_SanPham::all();
        return view('NHTadmins.NHTSanPham.NHTList',['nhtsp'=>$nhtsp]);
    }

    // Create product
    public function NHTCreate()
    {
        // Lấy tất cả các loại sản phẩm
        $nhtloaisps = NHT_Loai_SP::all();

        // Trả về view và truyền dữ liệu
        return view('NHTadmins.NHTSanPham.NHTCreate', compact('nhtloaisps'));
    }

    // Create product submit
    public function NHTcreateSubmit(Request $request)
    {
        $validatedData = $request->validate([
            'NHTMaSP' => 'required',
            'NHTTenSP' => 'required',
            'NHTHinhAnh' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'NHTDonGia' => 'required',
            'NHTSoLuong' => 'required',
            'NHTMaLoai' => 'required',
            'NHTTrangThai' => 'required',
        ]);

        $nhtsp = new NHT_SanPham();
        $nhtsp->NHTMaSP = $request->input('NHTMaSP');
        $nhtsp->NHTTenSP = $request->input('NHTTenSP');
        $nhtsp->NHTDonGia = $request->input('NHTDonGia');
        $nhtsp->NHTSoLuong = $request->input('NHTSoLuong');
        $nhtsp->NHTMaLoai = $request->input('NHTMaLoai');
        $nhtsp->NHTTrangThai = $request->input('NHTTrangThai');

        // Handle image upload
        if ($request->hasFile('NHTHinhAnh')) {
            $nhtsp->NHTHinhAnh = $request->file('NHTHinhAnh')->store('images', 'public');
        }

        $nhtsp->save();
        return redirect()->route('NHTadmins.NHTSanPham.NHTList')->with('success', 'Sản phẩm đã được tạo thành công');
    }

    // Edit product
    public function NHTEdit($id)
    {
        $nhtsp = NHT_SanPham::find($id);
        $nhtloaisps = NHT_Loai_SP::all(); 
        if (!$nhtsp) {
            return redirect()->route('NHTadmins.NHTSanPham.NHTList')
                ->with('error', 'Sản phẩm không tồn tại.');
        }
        return view('NHTadmins.NHTSanPham.NHTEdit', compact('nhtsp', 'nhtloaisps'));
    }

    // Edit product submit
    public function NHTEditSubmit(Request $request, $id)
    {
        $validatedData = $request->validate([
            'NHTMaSP' => 'required',
            'NHTTenSP' => 'required',
            'NHTDonGia' => 'required',
            'NHTSoLuong' => 'required',
            'NHTMaLoai' => 'required',
            'NHTHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'NHTTrangThai' => 'required',
        ]);

        $nhtsp = NHT_SanPham::find($id);
        if (!$nhtsp) {
            return redirect()->route('NHTadmins.NHTSanPham.NHTList')
                ->with('error', 'Sản phẩm không tồn tại.');
        }

        $nhtsp->NHTMaSP = $request->NHTMaSP;
        $nhtsp->NHTTenSP = $request->NHTTenSP;
        $nhtsp->NHTDonGia = $request->NHTDonGia;
        $nhtsp->NHTSoLuong = $request->NHTSoLuong;
        $nhtsp->NHTMaLoai = $request->NHTMaLoai;
        $nhtsp->NHTTrangThai = $request->NHTTrangThai;

        if ($request->hasFile('NHTHinhAnh')) {
            if ($nhtsp->NHTHinhAnh) {
                Storage::disk('public')->delete($nhtsp->NHTHinhAnh);
            }

            $nhtsp->NHTHinhAnh = $request->file('NHTHinhAnh')->store('images', 'public');
        }

        // Save updated product
        $nhtsp->save();

        return redirect()->route('NHTadmins.NHTSanPham.NHTList')->with('success', 'Sản phẩm đã được cập nhật thành công');
    }


    public function NHTdelete($id)
    {
        $nhtsp = NHT_SanPham::find($id);

        if ($nhtsp->NHTHinhAnh && Storage::disk('public')->exists($nhtsp->NHTHinhAnh)) {
            Storage::disk('public')->delete($nhtsp->NHTHinhAnh);
        }

        // Delete product
        $nhtsp->delete();

        return redirect()->route('NHTadmins.NHTSanPham.NHTList')->with('success', 'Xóa sản phẩm thành công');
    }
}
