<?php

namespace App\Http\Controllers;

use App\Models\NHT_SanPham;
use App\Models\NHTHoaDon;
use App\Models\NHTCTHoaDon;
use Illuminate\Http\Request;

class NHTCTHoaDonController extends Controller
{
    public function NHTCTList()
    {
        $NHTCTHoaDon = NHTCTHoaDon::with(['NHTHoaDon', 'NHTSanPham'])->get(); // Tải thêm các mối quan hệ
        return view('NHTadmins.NHTCTHoaDon.NHTCTList', ['NHTCTHoaDon' => $NHTCTHoaDon]);
    }

    // Tạo chi tiết hóa đơn
    public function NHTCTCreate()
    {
        $NHTHoaDon = NHTHoaDon::all();
        $NHT_SanPham = NHT_SanPham::all();
        return view('NHTadmins.NHTCTHoaDon.NHTCTCreate', ['NHTHoaDon' => $NHTHoaDon, 'NHT_SanPham' => $NHT_SanPham]);
    }

    // Lưu chi tiết hóa đơn
    public function NHTCTCreateSubmit(Request $request)
    {
        $request->validate([
            'NHTHoaDonID' => 'required|exists:NHTHoaDon,id',
            'NHTSanPhamID' => 'required|exists:NHT_SanPham,id',
            'NHTSoLuongMua' => 'required|integer|min:1',
            'NHTDonGiaMua' => 'required|numeric|min:0',
            'NHTThanhTien' => 'required|numeric|min:0',
            'NHTTrangThai' => 'required|boolean',
        ]);

        // Lưu chi tiết hóa đơn
        NHTCTHoaDon::create($request->only([
            'NHTHoaDonID',
            'NHTSanPhamID',
            'NHTSoLuongMua',
            'NHTDonGiaMua',
            'NHTThanhTien',
            'NHTTrangThai'
        ]));

        return redirect()->route('NHTadmins.NHTCTHoaDon.NHTCTList')->with('success', 'Chi tiết hóa đơn đã được tạo thành công.');
    }

    // Sửa chi tiết hóa đơn
  // Trong phương thức NHTCTEdit
public function NHTCTEdit($id)
{
    $NHTCTHoaDon = NHTCTHoaDon::find($id);
    if (!$NHTCTHoaDon) {
        return redirect()->route('NHTadmins.NHTCTHoaDon.NHTCTList')->with('error', 'Chi tiết hóa đơn không tồn tại.');
    }

    $NHTHoaDon = $NHTCTHoaDon->NHTHoaDon;  // Lấy thông tin hóa đơn liên quan đến chi tiết hóa đơn
    $NHT_SanPham = NHT_SanPham::all();

    return view('NHTadmins.NHTCTHoaDon.NHTCTEdit', [
        'NHTCTHoaDon' => $NHTCTHoaDon,
        'NHTHoaDon' => $NHTHoaDon,
        'NHT_SanPham' => $NHT_SanPham
    ]);
}


    // Cập nhật chi tiết hóa đơn
    public function NHTCTEditSubmit(Request $request, $id)
    {
        $request->validate([
            'NHTHoaDonID' => 'required|exists:NHTHoaDon,id',
            'NHTSanPhamID' => 'required|exists:NHT_SanPham,id',
            'NHTSoLuongMua' => 'required|integer|min:1',
            'NHTDonGiaMua' => 'required|numeric|min:0',
            'NHTThanhTien' => 'required|numeric|min:0',
            'NHTTrangThai' => 'required|boolean',
        ]);

        $NHTCTHoaDon = NHTCTHoaDon::find($id);
        $NHTCTHoaDon->update($request->only([
            'NHTHoaDonID',
            'NHTSanPhamID',
            'NHTSoLuongMua',
            'NHTDonGiaMua',
            'NHTThanhTien',
            'NHTTrangThai'
        ]));

        return redirect()->route('NHTadmins.NHTCTHoaDon.NHTCTList')->with('success', 'Chi tiết hóa đơn đã được cập nhật.');
    }

    // Xóa chi tiết hóa đơn
    public function NHTCTDelete($id)
    {
        NHTCTHoaDon::find($id)->delete();
        return redirect()->route('NHTadmins.NHTCTHoaDon.NHTCTList')->with('success', 'Chi tiết hóa đơn đã được xóa.');
    }
    
}
