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
        return view('NHTadmins.NHTCTHoaDon.NHTCTList', ['NHTCTHoaDon' => $NHTCTHoaDon]);
    }


    public function NHTCTCreate()
    {
        $NHTHoaDon = NHTHoaDon::all();
        $nhtsp = NHT_SanPham::all();
        return view('NHTadmins.NHTCTHoaDon.NHTCTCreate', ['NHTHoaDon' => $NHTHoaDon, 'NHT_SanPham' => $nhtsp]);
    }


    public function NHTCTCreateSubmit(Request $request)
    {
        $request->validate([
            'NHTHoaDonID' => 'required|exists:NHTHoaDon,id',
            'NHTSanPhamID' => 'required|exists:NHT_SanPham,id',
            'NHTSoLuongMua' => 'required|integer|min:1',
            'NHTDonGiaMua' => 'required|numeric|min:0',
            'NHTThanhTien' => 'required|numeric|min:0',
            'NHTTrangThai' => 'required|in:0,1',
        ]);

  
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

   
  public function NHTCTEdit($id)
  {
     
      $NHTCTHoaDon = NHTCTHoaDon::find($id);
  
    
      if (!$NHTCTHoaDon) {
          return redirect()->route('NHTadmins.NHTCTHoaDon.NHTCTList')->with('error', 'Chi tiết hóa đơn không tồn tại.');
      }
  
      
      $NHTHoaDon = $NHTCTHoaDon->NHTHoaDon;  
      $nhtsp = NHT_SanPham::all(); 
  
      return view('NHTadmins.NHTCTHoaDon.NHTCTEdit', [
          'NHTCTHoaDon' => $NHTCTHoaDon,  
          'NHTHoaDon' => $NHTHoaDon,  
          'NHT_SanPham' => $nhtsp  // Pass the list of products to the view
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
            'NHTTrangThai' => 'required|in:0,1',
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
