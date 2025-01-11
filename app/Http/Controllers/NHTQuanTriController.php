<?php

namespace App\Http\Controllers;

use App\Models\NHTQuanTri;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class NHTQuanTriController extends Controller
{
    // List all admins
    public function NHTList()
    {
        $nhtquantri = NHTQuanTri::all();
        return view('NHTadmins.NHTQuanTri.NHTList', ['nhtquantri' => $nhtquantri]);
    }

    // Edit admin
    public function NHTEdit($id)
    {
        $nhtquantri = NHTQuanTri::find($id);

        if (!$nhtquantri) {
            return redirect()->route('NHTadmins.NHTQuanTri.NHTList')
                ->with('error', 'Không tìm thấy quản trị viên.');
        }

        return view('NHTadmins.NHTQuanTri.NHTEdit', ['nhtquantri' => $nhtquantri]);
    }

    // Update admin
    public function NHTEditSubmit(Request $request, $id)
    {
        $validatedData = $request->validate([
            'NHTTaiKhoan' => 'required|unique:NHTQuanTri,NHTTaiKhoan,' . $id,
            'NHTMatKhau' => 'required|min:6',
            'NHTGioiTinh' => 'required',
            'NHTChucVu' => 'required',
            'NHTTrangThai' => 'required',
        ], [
            'NHTTaiKhoan.required' => 'Vui lòng nhập tài khoản',
            'NHTTaiKhoan.unique' => 'Tài khoản đã tồn tại',
            'NHTMatKhau.required' => 'Vui lòng nhập mật khẩu',
            'NHTMatKhau.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
            'NHTGioiTinh.required' => 'Vui lòng chọn giới tính',
            'NHTChucVu.required' => 'Vui lòng chọn chức vụ',
            'NHTTrangThai.required' => 'Vui lòng chọn trạng thái',
        ]);

        $nhtquantri = NHTQuanTri::findOrFail($id);

        try {
            $nhtquantri->update([
                'NHTTaiKhoan' => $request->NHTTaiKhoan,
                'NHTMatKhau' => Hash::make($request->NHTMatKhau),
                'NHTGioiTinh' => $request->NHTGioiTinh,
                'NHTChucVu' => $request->NHTChucVu,
                'NHTTrangThai' => $request->NHTTrangThai,
            ]);

            return redirect()->route('NHTadmins.NHTQuanTri.NHTList')
                ->with('success', 'Cập nhật thông tin thành công.');
        } catch (\Exception $e) {
            return redirect()->route('NHTadmins.NHTQuanTri.NHTEdit', $id)
                ->with('error', 'Đã xảy ra lỗi: ' . $e->getMessage());
        }
    }

    // Create admin
    public function NHTCreate()
    {
        return view('NHTadmins.NHTQuanTri.NHTCreate');
    }

    // Store new admin
    public function NHTCreateSubmit(Request $request)
    {
        $validatedData = $request->validate([
            'NHTTaiKhoan' => 'required|unique:NHTQuanTri,NHTTaiKhoan',
            'NHTMatKhau' => 'required|min:6',
            'NHTGioiTinh' => 'required',
            'NHTChucVu' => 'required',
            'NHTTrangThai' => 'required',
        ], [
            'NHTTaiKhoan.required' => 'Vui lòng nhập tài khoản',
            'NHTTaiKhoan.unique' => 'Tài khoản đã tồn tại',
            'NHTMatKhau.required' => 'Vui lòng nhập mật khẩu',
            'NHTMatKhau.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
            'NHTGioiTinh.required' => 'Vui lòng chọn giới tính',
            'NHTChucVu.required' => 'Vui lòng chọn chức vụ',
            'NHTTrangThai.required' => 'Vui lòng chọn trạng thái',
        ]);

        try {
            NHTQuanTri::create([
                'NHTTaiKhoan' => $request->NHTTaiKhoan,
                'NHTMatKhau' => Hash::make($request->NHTMatKhau),
                'NHTGioiTinh' => $request->NHTGioiTinh,
                'NHTChucVu' => $request->NHTChucVu,
                'NHTTrangThai' => $request->NHTTrangThai,
            ]);

            return redirect()->route('NHTadmins.NHTQuanTri.NHTList')
                ->with('success', 'Thêm quản trị viên thành công.');
        } catch (\Exception $e) {
            return redirect()->route('NHTadmins.NHTQuanTri.NHTCreate')
                ->with('error', 'Đã xảy ra lỗi: ' . $e->getMessage());
        }
    }

    // Delete admin
    public function NHTDelete($id)
    {
        $nhtquantri = NHTQuanTri::find($id);

        if (!$nhtquantri) {
            return redirect()->route('NHTadmins.NHTQuanTri.NHTList')
                ->with('error', 'Không tìm thấy quản trị viên.');
        }

        try {
            $nhtquantri->delete();

            return redirect()->route('NHTadmins.NHTQuanTri.NHTList')
                ->with('success', 'Xóa quản trị viên thành công.');
        } catch (\Exception $e) {
            return redirect()->route('NHTadmins.NHTQuanTri.NHTList')
                ->with('error', 'Đã xảy ra lỗi: ' . $e->getMessage());
        }
    }
}
