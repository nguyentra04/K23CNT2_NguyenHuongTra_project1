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
        $NHTCTHoaDon = NHTCTHoaDon::with(['NHTHoaDon', 'NHTSanPham'])->get();
        return view('NHTadmins.NHTCTHoaDon.NHTCTList', compact('NHTCTHoaDon'));
    }

    public function NHTCTCreate()
    {
        $NHTHoaDon = NHTHoaDon::all();
        $NHTSanPham = NHT_SanPham::all();
        return view('NHTadmins.NHTCTHoaDon.NHTCTCreate', compact('NHTHoaDon', 'NHTSanPham'));
    }

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

        NHTCTHoaDon::create($request->all());
        return redirect()->route('NHTadmins.NHTCTHoaDon.NHTCTList')->with('success', 'Chi tiết hóa đơn đã được thêm thành công.');
    }

    public function NHTCTEdit($id)
    {
        $NHTCTHoaDon = NHTCTHoaDon::findOrFail($id);
        $NHTHoaDon = NHTHoaDon::all();
        $NHTSanPham = NHT_SanPham::all();
        return view('NHTadmins.NHTCTHoaDon.NHTCTEdit', compact('NHTCTHoaDon', 'NHTHoaDon', 'NHTSanPham'));
    }

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

        $NHTCTHoaDon = NHTCTHoaDon::findOrFail($id);
        $NHTCTHoaDon->update($request->all());
        return redirect()->route('NHTadmins.NHTCTHoaDon.NHTCTList')->with('success', 'Chi tiết hóa đơn đã được cập nhật thành công.');
    }

    public function NHTCTDelete($id)
    {
        $NHTCTHoaDon = NHTCTHoaDon::findOrFail($id);
        $NHTCTHoaDon->delete();
        return redirect()->route('NHTadmins.NHTCTHoaDon.NHTCTList')->with('success', 'Chi tiết hóa đơn đã được xóa.');
    }
}
