<?php

namespace App\Http\Controllers;
use App\Models\NHTHoaDon;
use Illuminate\Http\Request;

class NHTHoaDonController extends Controller
{
    public function NHTList()
    {
        $NHTHoaDon = NHTHoaDon::all();
        return view('NHTadmins.NHTHoaDon.NHTList',['NHTHoaDon'=>$NHTHoaDon]);
    }

    public function NHTcreate()
    {
        return view('NHTadmins.NHTHoaDon.NHTCreate');
    }

    public function NHTCreateSubmit(Request $request)
    {
        $request->validate([
            'NHTMaHD' => 'required|unique:NHTHoaDon,NHTMaHD',
            'NHTMaKH' => 'required',
            'NHTNgayHD' => 'required|date',
            'NHTHoTenKH' => 'required|string',
            'NHTTongTriGia' => 'required|numeric|min:0',
            'NHTTrangThai' => 'required|boolean',
        ]);

        $NHTHoaDon = new NHTHoaDon;
        $NHTHoaDon->NHTMaHD = $request->NHTMaHD;
        $NHTHoaDon->NHTMaKH = $request->NHTMaKH;
        $NHTHoaDon->NHTNgayHD = $request->NHTNgayHD;
        $NHTHoaDon->NHTHoTenKH = $request->NHTHoTenKH;
        $NHTHoaDon->NHTTongTriGia = $request->NHTTongTriGia;
        $NHTHoaDon->NHTTrangThai = $request->NHTTrangThai;
        $NHTHoaDon->save();

        return redirect()->route('NHTadmins.NHTHoaDon.NHTList')->with('success', 'Hóa đơn được tạo thành công.');
    }

    public function NHTEdit($id)
    {
        $NHTHoaDon = NHTHoaDon::findOrFail($id);
        return view('NHTadmins.NHTHoaDon.NHTEdit', ['NHTHoaDon' => $NHTHoaDon]);
    }
    

    public function NHTEditSubmit(Request $request, $id)
{
    $validate = $request->validate([
        'NHTMaHD' => 'required|unique:NHTHoaDon,NHTMaHD,' . $id,
        'NHTMaKH' => 'required|exists:NHTKhachHang,NHTMaKH',
        'NHTNgayHD' => 'required|date',
        'NHTHoTenKH' => 'required|string',
        'NHTTongTriGia' => 'required|numeric|min:0',
        'NHTTrangThai' => 'required|boolean',
    ]);

    $NHTHoaDon = NHTHoaDon::findOrFail($id);
    $NHTHoaDon->NHTMaHD = $request->NHTMaHD;
    $NHTHoaDon->NHTMaKH = $request->NHTMaKH;
    $NHTHoaDon->NHTNgayHD = $request->NHTNgayHD;
    $NHTHoaDon->NHTHoTenKH = $request->NHTHoTenKH;
    $NHTHoaDon->NHTTongTriGia = $request->NHTTongTriGia;
    $NHTHoaDon->NHTTrangThai = $request->NHTTrangThai;
    $NHTHoaDon->save();
    
    return redirect()->route('NHTadmins.NHTHoaDon.NHTList')->with('success', 'Hóa đơn được cập nhật thành công.');
}


    public function NHTDelete($id)
    {
        $NHTHoaDon = NHTHoaDon::findOrFail($id);
        $NHTHoaDon->delete();

        return redirect()->route('NHTadmins.NHTHoaDon.NHTList')->with('success', 'Hóa đơn đã được xóa.');
    }
}
