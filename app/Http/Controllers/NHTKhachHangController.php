<?php

namespace App\Http\Controllers;

use App\Models\NHTKhachHang;
use Illuminate\Http\Request;

class NHTKhachHangController extends Controller
{
    // List all customers
    public function NHTList()
    {
        $nhtkh = NHTKhachHang::all();
        return view('NHTadmins.NHTKhachHang.NHTList', ['nhtkh' => $nhtkh]);
    }

    // Show create customer form
    public function NHTCreate()
    {
        return view('NHTadmins.NHTKhachHang.NHTCreate');
    }

    // Handle create customer submission
    public function NHTCreateSubmit(Request $request)
    {
        $validate = $request->validate([
            'NHTMaKH' => 'required',
            'NHTTenKH' => 'required',
            'NHTDiaChi' => 'required',
            'NHTSDT' => 'required',
            'NHTEmail' => 'required',
            'NHTNgaySinh' => 'required',
            'NHTGioiTinh' => 'required',
            'NHTTrangThai' => 'required',
        ]);

        $nhtkh = new NHTKhachHang;
        $nhtkh->NHTMaKH = $request->NHTMaKH;
        $nhtkh->NHTTenKH = $request->NHTTenKH;
        $nhtkh->NHTDiaChi = $request->NHTDiaChi;
        $nhtkh->NHTSDT = $request->NHTSDT;
        $nhtkh->NHTEmail = $request->NHTEmail;
        $nhtkh->NHTNgaySinh = $request->NHTNgaySinh;
        $nhtkh->NHTGioiTinh = $request->NHTGioiTinh;
        $nhtkh->NHTTrangThai = $request->NHTTrangThai;
        $nhtkh->save();

        return redirect()->route('NHTadmins.NHTKhachHang.NHTList')->with('success', 'Khách hàng được tạo thành công!');
    }

    // Show edit form for a specific customer
    public function NHTEdit($id)
    {
        $nhtkh = NHTKhachHang::find($id);
        return view('NHTadmins.NHTKhachHang.NHTEdit', ['nhtkh' => $nhtkh]);
    }

    // Handle customer edit submission
    public function NHTEditSubmit(Request $request, $id)
    {
        $validate = $request->validate([
            'NHTMaKH' => 'required | unique:NHTKhachHang,NHTMaKH,' . $id,
            'NHTTenKH' => 'required',
            'NHTDiaChi' => 'required',
            'NHTSDT' => 'required',
            'NHTEmail' => 'required',
            'NHTNgaySinh' => 'required',
            'NHTGioiTinh' => 'required',
            'NHTTrangThai' => 'required',
        ]);

        $nhtkh = NHTKhachHang::find($id);
        $nhtkh->NHTMaKH = $request->NHTMaKH;
        $nhtkh->NHTTenKH = $request->NHTTenKH;
        $nhtkh->NHTDiaChi = $request->NHTDiaChi;
        $nhtkh->NHTSDT = $request->NHTSDT;
        $nhtkh->NHTEmail = $request->NHTEmail;
        $nhtkh->NHTNgaySinh = $request->NHTNgaySinh;
        $nhtkh->NHTGioiTinh = $request->NHTGioiTinh;
        $nhtkh->NHTTrangThai = $request->NHTTrangThai;
        $nhtkh->save();

        return redirect()->route('NHTadmins.NHTKhachHang.NHTList')->with('success', 'Sửa thành công');
    }

    // Delete a customer
    public function NHTDelete($id)
    {
        $nhtkh = NHTKhachHang::find($id);
        $nhtkh->delete();

        return redirect()->route('NHTadmins.NHTKhachHang.NHTList')->with('success', 'Xóa thành công');
    }
}
