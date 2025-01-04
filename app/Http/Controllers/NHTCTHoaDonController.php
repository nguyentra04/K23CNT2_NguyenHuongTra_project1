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
        $NHTCTHoaDon = NHTCTHoaDon::all();
        return view('NHTadmins.NHTCTHoaDon.NHTCTList', ['NHTCTHoaDon' => $NHTCTHoaDon]);
    }

    public function NHTCTCreate()
    {
        $NHTHoaDon = NHTHoaDon::all();
        $NHT_SanPham = NHT_SanPham::all();
        return view('NHTadmins.NHTCTHoaDon.NHTCTCreate', ['NHT_SanPham' => $NHT_SanPham]);
        
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
        return redirect()->route('NHTadmins.NHTCTHoaDon.NHTCTList')->with('success', 'Chi tiết hóa đơn đã được tạo thành công.');
    }

    public function NHTCTEdit($id)
    {
        $NHTCTHoaDon = NHTCTHoaDon::find($id);
        $NHTHoaDon = NHTHoaDon::all();
        $NHT_SanPham = NHT_SanPham::all();
        return view('NHTadmins.NHTCTHoaDon.NHTCTEdit', ['NHTCTHoaDon' => $NHTCTHoaDon, 'NHTHoaDon' => $NHTHoaDon, 'NHT_SanPham' => $NHT_SanPham]);
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
        NHTCTHoaDon::find($id)->update($request->all());
        return redirect()->route('NHTadmins.NHTCTHoaDon.NHTCTList')->with('success', 'Chi tiết hóa đơn đã được cập nhật.');
    }
    

    public function NHTCTDelete($id)
    {
        NHTCTHoaDon::find($id)->delete();
        return redirect()->route('NHTadmins.NHTCTHoaDon.NHTCTList')->with('success', 'Chi tiết hóa đơn đã được xóa.');
    }
    
}
