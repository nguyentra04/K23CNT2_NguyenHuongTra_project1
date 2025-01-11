<?php

namespace App\Http\Controllers;
use App\Models\NHTKhachHang;
use Illuminate\Http\Request;

class NHTKhachHangController extends Controller
{
   
    public function NHTList()
    {
        $nhtkh = NHTKhachHang::all();
        return view('NHTadmins.NHTKhachHang.NHTList', ['nhtkh' => $nhtkh]);
    }

    public function NHTCreate()
    {
        return view('NHTadmins.NHTKhachHang.NHTCreate');
    }

   
    public function NHTCreateSubmit(Request $request)
    {
        $request->validate([
            'NHTMaKH' => 'required|unique:NHTKhachHang,NHTMaKH',
            'NHTTenKH' => 'required|string|max:255',
            'NHTDiaChi' => 'required|string|max:255',
            'NHTSDT' => 'required|regex:/^[0-9]{10}$/',
            'NHTEmail' => 'required|email',
            'NHTNgaySinh' => 'required|date',
            'NHTGioiTinh' => 'required|in:Nam,Nữ',
            'NHTTrangThai' => 'required|in:1,0',
        ]);

        try {
            $nhtkh = new NHTKhachHang();
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
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi tạo khách hàng: ' . $e->getMessage());
        }
    }

   
    public function NHTEdit($id)
    {
        $nhtkh = NHTKhachHang::findOrFail($id);
        return view('NHTadmins.NHTKhachHang.NHTEdit', ['nhtkh' => $nhtkh]);
    }

    public function NHTEditSubmit(Request $request, $id)
    {
        $request->validate([
            'NHTMaKH' => 'required|unique:NHTKhachHang,NHTMaKH,' . $id,
            'NHTTenKH' => 'required|string|max:255',
            'NHTDiaChi' => 'required|string|max:255',
            'NHTSDT' => 'required|regex:/^[0-9]{10}$/',
            'NHTEmail' => 'required|email',
            'NHTNgaySinh' => 'required|date',
            'NHTGioiTinh' => 'required|in:Nam,Nữ',
            'NHTTrangThai' => 'required|in:1,0',
        ]);

        try {
            $nhtkh = NHTKhachHang::findOrFail($id);
            $nhtkh->NHTMaKH = $request->NHTMaKH;
            $nhtkh->NHTTenKH = $request->NHTTenKH;
            $nhtkh->NHTDiaChi = $request->NHTDiaChi;
            $nhtkh->NHTSDT = $request->NHTSDT;
            $nhtkh->NHTEmail = $request->NHTEmail;
            $nhtkh->NHTNgaySinh = $request->NHTNgaySinh;
            $nhtkh->NHTGioiTinh = $request->NHTGioiTinh;
            $nhtkh->NHTTrangThai = $request->NHTTrangThai;
            $nhtkh->save();

            return redirect()->route('NHTadmins.NHTKhachHang.NHTList')->with('success', 'Sửa khách hàng thành công!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi sửa khách hàng: ' . $e->getMessage());
        }
    }

    public function NHTDelete($id)
    {
        try {
            $nhtkh = NHTKhachHang::findOrFail($id);
            $nhtkh->delete();

            return redirect()->route('NHTadmins.NHTKhachHang.NHTList')->with('success', 'Xóa khách hàng thành công!');
        } catch (\Exception $e) {
            return redirect()->route('NHTadmins.NHTKhachHang.NHTList')->with('error', 'Đã xảy ra lỗi khi xóa khách hàng: ' . $e->getMessage());
        }
    }
}
