<?php
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NHTQuanTriController;
use App\Http\Controllers\NHTKhachHangController;
use App\Http\Controllers\NHTLoaiSanPhamController;
use App\Http\Controllers\NHTSanPhamController;
use App\Http\Controllers\NHTHoaDonController;
use App\Http\Controllers\NHTLogin;
use App\Http\Controllers\NHTCTHoaDonController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// route::get('/nht-admins', function () {
//     return view('NHTHome');
// });
Route::get('/nht-admins', function () {
    return view('layouts.Admins.NHT_master');
});
//nvkLogin
Route::get('/NHTLogin', [NHTLogin::class, 'NHTLoginForm'])->name('NHTLogin');
Route::post('/NHTLogin', [NHTLogin::class, 'NHTLogin']);
Route::post('/NHTLogout', function () {
    Auth::logout();
    return redirect('/NHTLogin');
})->name('NHTLogout');

Route::get('/NHTDashboard', function () {
    return view('layouts.Admins.NHT_master');
})->name('NHTDashboard')->middleware('auth');

#quantri
route::get('/nht-admins/NHTQuanTri',[NHTQuanTriController::class,'NHTList'])->name('NHTadmins.NHTQuanTri.NHTList');
//create
route::get('/nht-admins/NHTQuanTri/NHTCreate',[NHTQuanTriController::class,'NHTCreate'])->name('NHTadmins.NHTQuanTri.NHTCreate');
route::post('/nht-admins/NHTQuanTri/NHTCreate',[NHTQuanTriController::class,'NHTCreateSubmit'])->name('NHTadmins.NHTQuanTri.NHTCreateSubmit');
//edit
route::get('/nht-admins/NHTQuanTri/NHTEdit/{id}',[NHTQuanTriController::class,'NHTEdit'])->name('NHTadmins.NHTQuanTri.NHTEdit');
route::post('/nht-admins/NHTQuanTri/NHTEdit',[NHTQuanTriController::class,'NHTEditSubmit'])->name('NHTadmins.NHTQuanTri.NHTEditSubmit');
//delete
route::get('/nht-admins/NHTQuanTri/NHTDelete/{id}',[NHTQuanTriController::class,'NHTDelete'])->name('NHTadmins.NHTQuanTri.NHTDelete');

#khachhang
route::get('/nht-admins/NHTKhachHang', [NHTKhachHangController::class,'NHTList'])->name('NHTadmins.NHTKhachHang.NHTList');
route::get('/nht-admins/NHTKhachHang/NHTCreate', [NHTKhachHangController::class,'NHTCreate'])->name('NHTadmins.NHTKhachHang.NHTCreate');
route::post('/nht-admins/NHTKhachHang/NHTCreate', [NHTKhachHangController::class,'NHTCreateSubmit'])->name('NHTadmins.NHTKhachHang.NHTCreateSubmit');
route::get('/nht-admins/NHTKhachHang/NHTEdit/{id}', [NHTKhachHangController::class,'NHTEdit'])->name('NHTadmins.NHTKhachHang.NHTEdit');
route::post('/nht-admins/NHTKhachHang/NHTEdit', [NHTKhachHangController::class,'NHTEditSubmit'])->name('NHTadmins.NHTKhachHang.NHTEditSubmit');
route::get('/nht-admins/NHTKhachHang/NHTDelete/{id}', [NHTKhachHangController::class,'NHTDelete'])->name('NHTadmins.NHTKhachHang.NHTDelete');

#LoaiSanPham

route::get('/nht-admins/NHTLoaiSanPham', [NHTLoaiSanPhamController::class,'NHTList'])->name('NHTadmins.NHTLoaiSanPham.NHTList');
route::get('/nht-admins/NHTLoaiSanPham/NHTCreate', [NHTLoaiSanPhamController::class,'NHTCreate'])->name('NHTadmins.NHTLoaiSanPham.NHTCreate');
route::post('/nht-admins/NHTLoaiSanPham/NHTCreate', [NHTLoaiSanPhamController::class,'NHTCreateSubmit'])->name('NHTadmins.NHTLoaiSanPham.NHTCreateSubmit');
route::get('/nht-admins/NHTLoaiSanPham/NHTEdit/{id}', [NHTLoaiSanPhamController::class,'NHTEdit'])->name('NHTadmins.NHTLoaiSanPham.NHTEdit');
route::post('/nht-admins/NHTLoaiSanPham/NHTEdit', [NHTLoaiSanPhamController::class,'NHTEditSubmit'])->name('NHTadmins.NHTLoaiSanPham.NHTEditSubmit');
route::get('/nht-admins/NHTLoaiSanPham/NHTDelete/{id}', [NHTLoaiSanPhamController::class,'NHTDelete'])->name('NHTadmins.NHTLoaiSanPham.NHTDelete');
#SanPhamt');
route::get('/nht-admins/NHTSanPham', [NHTSanPhamController::class,'NHTList'])->name('NHTadmins.NHTSanPham.NHTList');
route::get('/nht-admins/NHTSanPham/NHTCreate', [NHTSanPhamController::class,'NHTCreate'])->name('NHTadmins.NHTSanPham.NHTCreate');
route::post('/nht-admins/NHTSanPham/NHTCreate', [NHTSanPhamController::class,'NHTCreateSubmit'])->name('NHTadmins.NHTSanPham.NHTCreateSubmit');
route::get('/nht-admins/NHTSanPham/NHTEdit/{id}', [NHTSanPhamController::class,'NHTEdit'])->name('NHTadmins.NHTSanPham.NHTEdit');
route::post('/nht-admins/NHTSanPham/NHTEdit', [NHTSanPhamController::class,'NHTEditSubmit'])->name('NHTadmins.NHTSanPham.NHTEditSubmit');
route::get('/nht-admins/NHTSanPham/NHTDelete/{id}', [NHTSanPhamController::class,'NHTDelete'])->name('NHTadmins.NHTSanPham.NHTDelete');
#HoaDon
route::get('/nht-admins/NHTHoaDon', [NHTHoaDonController::class,'NHTList'])->name('NHTadmins.NHTHoaDon.NHTList');
route::get('/nht-admins/NHTHoaDon/NHTCreate', [NHTHoaDonController::class,'NHTCreate'])->name('NHTadmins.NHTHoaDon.NHTCreate');
route::post('/nht-admins/NHTHoaDon/NHTCreate', [NHTHoaDonController::class,'NHTCreateSubmit'])->name('NHTadmins.NHTHoaDon.NHTCreateSubmit');
route::get('/nht-admins/NHTHoaDon/NHTEdit/{id}', [NHTHoaDonController::class,'NHTEdit'])->name('NHTadmins.NHTHoaDon.NHTEdit');
route::post('/nht-admins/NHTHoaDon/NHTEdit', [NHTHoaDonController::class,'NHTEditSubmit'])->name('NHTadmins.NHTHoaDon.NHTEditSubmit');
route::get('/nht-admins/NHTHoaDon/NHTDelete/{id}', [NHTHoaDonController::class,'NHTDelete'])->name('NHTadmins.NHTHoaDon.NHTDelete');
#ChiTietHoaDon
route::get('/nht-admins/NHTCTHoaDon', [NHTCTHoaDonController::class,'NHTCTList'])->name('NHTadmins.NHTCTHoaDon.NHTList');
route::get('/nht-admins/NHTCTHoaDon/NHTCreate', [NHTCTHoaDonController::class,'NHTCTCreate'])->name('NHTadmins.NHTCTHoaDon.NHTCTCreate');
route::post('/nht-admins/NHTCTHoaDon/NHTCreate', [NHTCTHoaDonController::class,'NHTCTCreateSubmit'])->name('NHTadmins.NHTCTHoaDon.NHTCTCreateSubmit');
route::get('/nht-admins/NHTCTHoaDon/NHTEdit/{id}', [NHTCTHoaDonController::class,'NHTCTEdit'])->name('NHTadmins.NHTCTHoaDon.NHTCTEdit');
route::post('/nht-admins/NHTCTHoaDon/NHTEdit', [NHTCTHoaDonController::class,'NHTCTEditSubmit'])->name('NHTadmins.NHTCTHoaDon.NHTCTEditSubmit');
route::get('/nht-admins/NHTCTHoaDon/NHTDelete/{id}', [NHTCTHoaDonController::class,'NHTCTDelete'])->name('NHTadmins.NHTCTHoaDon.NHTCTDelete');
