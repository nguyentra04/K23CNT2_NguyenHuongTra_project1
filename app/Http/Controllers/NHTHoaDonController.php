<?php

namespace App\Http\Controllers;

use App\Models\NHTHoaDon;
use App\Models\NHTKhachHang;
use Illuminate\Http\Request;

class NHTHoaDonController extends Controller
{
    public function NHTList(){
        $NHTHoaDon = NHTHoaDon::with('NHTKhachHang')->get();
        return view('NHTadmins.NHTHoaDon.NHTList', ['NHTHoaDon' => $NHTHoaDon]);
    }

    public function NHTcreate()
    {
        
        $nhtkh = NHTKhachHang::all(); 
        return view('NHTadmins.NHTHoaDon.NHTCreate', ['nhtkh' => $nhtkh]);
    }

    public function NHTCreateSubmit(Request $request)
    {
        $request->validate([
            'NHTMaHD' => 'required|unique:NHTHoaDon,NHTMaHD',
            'NHTMaKH' => 'required|exists:NHTKhachHang,NHTMaKH',
            'NHTNgayHD' => 'required|date',
            'NHTTongTriGia' => 'required|numeric|min:0',
            'NHTTrangThai' => 'required|in:0,1',
        ]);

        $nhtkh = NHTKhachHang::where('NHTMaKH', $request->NHTMaKH)->first(); 


        $NHTHoaDon = new NHTHoaDon;
        $NHTHoaDon->NHTMaHD = $request->NHTMaHD;
        $NHTHoaDon->NHTMaKH = $request->NHTMaKH;
        $NHTHoaDon->NHTNgayHD = $request->NHTNgayHD;
        $NHTHoaDon->NHTHoTenKH = $nhtkh->NHTTenKH;  
        $NHTHoaDon->NHTTongTriGia = $request->NHTTongTriGia;
        $NHTHoaDon->NHTTrangThai = $request->NHTTrangThai;
        $NHTHoaDon->save();

        return redirect()->route('NHTadmins.NHTHoaDon.NHTList')->with('success', 'Hóa đơn được tạo thành công.');
    }

    public function NHTEdit($id)
{
        $NHTHoaDon = NHTHoaDon::findOrFail($id);
        $nhtkh = NHTKhachHang::all(); 


        return view('NHTadmins.NHTHoaDon.NHTEdit', ['NHTHoaDon' => $NHTHoaDon, 'nhtkh' => $nhtkh]); 
    }

    public function NHTEditSubmit(Request $request, $id)
    {
        $request->validate([
            'NHTMaHD' => 'required|unique:NHTHoaDon,NHTMaHD,' . $id,
            'NHTMaKH' => 'required|exists:NHTKhachHang,NHTMaKH',
            'NHTNgayHD' => 'required|date',
            'NHTTongTriGia' => 'required|numeric|min:0',
            'NHTTrangThai' => 'required|in:0,1',
        ]);

        $nhtkh = NHTKhachHang::where('NHTMaKH', $request->NHTMaKH)->first(); 

        $NHTHoaDon = NHTHoaDon::findOrFail($id);
        $NHTHoaDon->NHTMaHD = $request->NHTMaHD;
        $NHTHoaDon->NHTMaKH = $request->NHTMaKH;
        $NHTHoaDon->NHTNgayHD = $request->NHTNgayHD;
        $NHTHoaDon->NHTHoTenKH = $nhtkh->NHTTenKH; 
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
