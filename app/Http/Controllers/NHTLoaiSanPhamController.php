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

    // Handle form submission for creating a new product category
    public function NHTCreateSubmit(Request $request)
    {
        $validatedData = $request->validate([
            'NHTMaLoai' => 'required|unique:NHT_Loai_SP,NHTMaLoai',
            'NHTTenLoai' => 'required',
            'NHTTrangThai' => 'required|in:0,1',
        ], [
            'NHTMaLoai.required' => 'Vui lòng nhập mã loại sản phẩm',
            'NHTMaLoai.unique' => 'Mã loại sản phẩm đã tồn tại',
            'NHTTenLoai.required' => 'Vui lòng nhập tên loại sản phẩm',
            'NHTTrangThai.required' => 'Vui lòng chọn trạng thái',
            'NHTTrangThai.in' => 'Trạng thái không hợp lệ',
        ]);

        try {
            NHT_Loai_SP::create([
                'NHTMaLoai' => $request->input('NHTMaLoai'),
                'NHTTenLoai' => $request->input('NHTTenLoai'),
                'NHTTrangThai' => $request->input('NHTTrangThai'),
            ]);

            return redirect()->route('NHTadmins.NHTLoaiSanPham.NHTList')
                ->with('success', 'Thêm loại sản phẩm thành công.');
        } catch (\Exception $e) {
            return redirect()->route('NHTadmins.NHTLoaiSanPham.NHTCreate')
                ->with('error', 'Đã xảy ra lỗi: ' . $e->getMessage());
        }
    }

    // Show the edit product category form
    public function NHTEdit($id)
    {
        $nhtloaisps = NHT_Loai_SP::find($id);

        if (!$nhtloaisps) {
            return redirect()->route('NHTadmins.NHTLoaiSanPham.NHTList')
                ->with('error', 'Không tìm thấy loại sản phẩm.');
        }

        return view('NHTadmins.NHTLoaiSanPham.NHTEdit', ['nhtloaisps' => $nhtloaisps]);
    }
    public function NHTEditSubmit(Request $request, $id)
    {
        $validatedData = $request->validate([
            'NHTMaLoai' => 'required' . $id,
            'NHTTenLoai' => 'required',
            'NHTTrangThai' => 'required|in:0,1',
        ], [
            'NHTMaLoai.required' => 'Vui lòng nhập mã loại sản phẩm',
            'NHTMaLoai.unique' => 'Mã loại sản phẩm đã tồn tại',
            'NHTTenLoai.required' => 'Vui lòng nhập tên loại sản phẩm',
            'NHTTrangThai.required' => 'Vui lòng chọn trạng thái',
            'NHTTrangThai.in' => 'Trạng thái không hợp lệ',
        ]);

        $nhtloaisps = NHT_Loai_SP::find($id);

        if (!$nhtloaisps) {
            return redirect()->route('NHTadmins.NHTLoaiSanPham.NHTList')
                ->with('error', 'Không tìm thấy loại sản phẩm.');
        }

        try {
            $nhtloaisps->update([
                'NHTMaLoai' => $request->input('NHTMaLoai'),
                'NHTTenLoai' => $request->input('NHTTenLoai'),
                'NHTTrangThai' => $request->input('NHTTrangThai'),
            ]);

            return redirect()->route('NHTadmins.NHTLoaiSanPham.NHTList')
                ->with('success', 'Cập nhật loại sản phẩm thành công.');
        } catch (Exception $e) {
            return redirect()->route('NHTadmins.NHTLoaiSanPham.NHTEdit', $id)
                ->with('error', 'Đã xảy ra lỗi: ' . $e->getMessage());
        }
    }

    public function NHTDelete($id)
    {
        $nhtloaisps = NHT_Loai_SP::find($id);

        if (!$nhtloaisps) {
            return redirect()->route('NHTadmins.NHTLoaiSanPham.NHTList')
                ->with('error', 'Không tìm thấy loại sản phẩm.');
        }
        try {
            $nhtloaisps->delete();
            return redirect()->route('NHTadmins.NHTLoaiSanPham.NHTList')->with('success', 'Xóa loại sản phẩm thành công.');
        } catch (Exception $e) {
            return redirect()->route('NHTadmins.NHTLoaiSanPham.NHTList')
                ->with('error', 'Đã xảy ra lỗi: ' . $e->getMessage());
        }
    }
}
