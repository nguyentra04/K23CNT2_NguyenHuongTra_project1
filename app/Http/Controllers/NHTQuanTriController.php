<?php

namespace App\Http\Controllers;
use App\Models\NHTQuanTri;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class NHTQuanTriController extends Controller
{
    //list
    public function NHTList()
    {
        $nhtquantri = NHTQuanTri::all();
        return view('NHTadmins.NHTQuanTri.NHTList',['nhtquantri'=>$nhtquantri]);
    }
    public function NHTEdit($id)
    {

    $nhtquantri = NHTQuanTri::find($id);

    if (!$nhtquantri) {
        return redirect()->route('NHTadmins.NHTQuanTri.NHTList')
            ->with('error', 'Không tìm thấy quản trị viên.');
    }

    // Nếu tìm thấy, trả về view để chỉnh sửa
    return view('NHTadmins.NHTQuanTri.NHTEdit', ['nhtquantri' => $nhtquantri]);
    }

    #update
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
                ->with('success', 'Admin updated successfully');
        } catch (\Exception $e) {
            // In ra lỗi để debug
            dd($e->getMessage());
        }
        $nhtquantri->update([
            'NHTTaiKhoan' => $request->NHTTaiKhoan,
            'NHTMatKhau' => Hash::make($request->NHTMatKhau),
            'NHTGioiTinh' => $request->NHTGioiTinh,
            'NHTChucVu' => $request->NHTChucVu,
            'NHTTrangThai' => $request->NHTTrangThai,
        ]);
    
        return redirect()->route('NHTadmins.NHTQuanTri.NHTList')
            ->with('success', 'Cập nhật thông tin thành công');
    }

    public function NHTCreate()
    {
        return view('NHTadmins.NHTQuanTri.NHTCreate');
    }
    //store
    public function NHTCreateSubmit(request $request)
    {
        $ValidatedData = $request->validate([
            'NHTTaiKhoan' => 'required',
            'NHTMatKhau' => 'required',
            'NHTGioiTinh' => 'required',
            'NHTChucVu' => 'required',
            'NHTTrangThai' => 'required',
        ]);
        $nhtquantri = new NHTQuanTri;
        $nhtquantri->NHTTaiKhoan = $request->NHTTaiKhoan;
        $nhtquantri->NHTMatKhau = Hash::make($request->NHTMatKhau);
        $nhtquantri->NHTGioiTinh = $request->NHTGioiTinh;
        $nhtquantri->NHTChucVu = $request->NHTChucVu;
        $nhtquantri->NHTTrangThai = $request->NHTTrangThai;
        $nhtquantri->save();
        return redirect()->route('NHTadmins.NHTQuanTri.NHTList')->with('Thông báo','Thêm thành công');
    }
    public function NHTDelete($id)
    {
        $nhtquantri = NHTQuanTri::find($id);
        $nhtquantri->delete();
        return redirect()->route('NHTadmins.NHTQuanTri.NHTList',
        [$id])->with('Thông báo','Xóa thành công');
    }

}
