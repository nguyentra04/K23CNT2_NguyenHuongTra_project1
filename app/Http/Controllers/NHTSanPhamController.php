<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NHT_SanPham;
use Illuminate\Support\Facades\Storage;

class NHTSanPhamController extends Controller
{
    // List of products
    public function NHTList()
    {
        $nhtsp = NHT_SanPham::all();
        return view('NHTadmins.NHTSanPham.NHTList', compact('nhtsp'));
    }

    // Create product
    public function NHTcreate()
    {
        return view('NHTadmins.NHTSanPham.NHTCreate');
    }

    // Create product submit
    public function NHTcreateSubmit(Request $request,$id)
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
        $nhtsp->NHTHinhAnh = $request->file('NHTHinhAnh')->store('images', 'public');
        $nhtsp->save();
        return redirect()->route('NHTadmins.NHTSanPham.NHTList',[$id])->with('Thông báo','Sửa thành công');
    }

    public function NHTEdit($id)
    {
        $nhtsp = NHT_SanPham::find($id);
        return view('NHTadmins.NHTSanPham.NHTEdit', compact('nhtsp'));
    }

    public function NHTEditSubmit(Request $request)
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
        $nhtsp->NHTMaSP = $request->NHTMaSP;
        $nhtsp->NHTTenSP = $request->NHTTenSP;
        $nhtsp->NHTDonGia = $request->NHTDonGia;
        $nhtsp->NHTSoLuong = $request->NHTSoLuong;
        $nhtsp->NHTMaLoai = $request->NHTMaLoai;
        $nhtsp->NHTTrangThai = $request->NHTTrangThai;
        if ($request->hasFile('NHTHinhAnh')) {
            $file = $request->file('NHTHinhAnh');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $data['NHTHinhAnh'] = $filename;
        }
    
        return redirect()->route('NHTadmins.NHTSanPham.NHTList')->with('success', 'Product updated successfully.');
    }


    public function NHTdelete($id)
    {
        $nhtsp = NHT_SanPham::find($id);
        if ($nhtsp->NHTHinhAnh) {
            Storage::disk('public')->delete($nhtsp->NHTHinhAnh);
        }
        // Delete product entry
        $nhtsp->delete();

        return redirect()->route('NHTadmins.NHTSanPham.NHTList')->with('success', 'Xóa sản phẩm thành công');
    }

    public function NHTIndex()
    {
        $nhtsp = NHT_SanPham::all();
        return view('NHTadmins.NHTSanPham.NHTIndex', compact('nhtsp'));
    }

    // Hiển thị chi tiết sản phẩm
    public function NHTDetails($id)
    {
        $nhtsp = NHT_SanPham::findOrFail($id);
        return view('NHTadmins.NHTSanPham.NHTDetails', compact('nhtsp'));
    }

    // Trang quản trị sản phẩm
    public function NHTAdmin()
    {
        $nhtsp = NHT_SanPham::all();
        return view('NHTadmins.NHTSanPham.NHTIndex', compact('nhtsp'));
    }
}
