<?php

namespace App\Http\Controllers;

use App\Models\NHTHoaDon;
use App\Models\NHTKhachHang; // Import the customer model
use Illuminate\Http\Request;

class NHTHoaDonController extends Controller
{
    public function NHTList()
    {
        $NHTHoaDon = NHTHoaDon::with('khachHang')->get(); // Use eager loading
        return view('NHTadmins.NHTHoaDon.NHTList', ['NHTHoaDon' => $NHTHoaDon]);
    }

    public function NHTcreate()
    {
        $customers = NHTKhachHang::all(); // Fetch customers for dropdown
        return view('NHTadmins.NHTHoaDon.NHTCreate', ['customers' => $customers]);
    }

    public function NHTCreateSubmit(Request $request)
    {
        $request->validate([
            'NHTMaHD' => 'required|unique:NHTHoaDon,NHTMaHD',
            'NHTMaKH' => 'required|exists:NHTKhachHang,NHTMaKH', // Ensure the customer exists
            'NHTNgayHD' => 'required|date',
            'NHTTongTriGia' => 'required|numeric|min:0',
            'NHTTrangThai' => 'required|boolean',
        ]);

        $customer = NHTKhachHang::where('NHTMaKH', $request->NHTMaKH)->first(); // Get customer details

        $NHTHoaDon = new NHTHoaDon;
        $NHTHoaDon->NHTMaHD = $request->NHTMaHD;
        $NHTHoaDon->NHTMaKH = $request->NHTMaKH;
        $NHTHoaDon->NHTNgayHD = $request->NHTNgayHD;
        $NHTHoaDon->NHTHoTenKH = $customer->NHTTenKH; // Automatically set customer name
        $NHTHoaDon->NHTTongTriGia = $request->NHTTongTriGia;
        $NHTHoaDon->NHTTrangThai = $request->NHTTrangThai;
        $NHTHoaDon->save();

        return redirect()->route('NHTadmins.NHTHoaDon.NHTList')->with('success', 'Hóa đơn được tạo thành công.');
    }

    public function NHTEdit($id)
    {
        $NHTHoaDon = NHTHoaDon::findOrFail($id);
        $customers = NHTKhachHang::all(); // Fetch customers for dropdown
        return view('NHTadmins.NHTHoaDon.NHTEdit', ['NHTHoaDon' => $NHTHoaDon, 'customers' => $customers]);
    }

    public function NHTEditSubmit(Request $request, $id)
    {
        $request->validate([
            'NHTMaHD' => 'required|unique:NHTHoaDon,NHTMaHD,' . $id,
            'NHTMaKH' => 'required|exists:NHTKhachHang,NHTMaKH',
            'NHTNgayHD' => 'required|date',
            'NHTTongTriGia' => 'required|numeric|min:0',
            'NHTTrangThai' => 'required|boolean',
        ]);

        $customer = NHTKhachHang::where('NHTMaKH', $request->NHTMaKH)->first(); 

        $NHTHoaDon = NHTHoaDon::findOrFail($id);
        $NHTHoaDon->NHTMaHD = $request->NHTMaHD;
        $NHTHoaDon->NHTMaKH = $request->NHTMaKH;
        $NHTHoaDon->NHTNgayHD = $request->NHTNgayHD;
        $NHTHoaDon->NHTHoTenKH = $customer->NHTTenKH; 
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
