<?php
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NHTQuanTriController;
use App\Http\Controllers\NHTKhachHangController;
use App\Http\Controllers\NHTLoaiSanPhamController;
use App\Http\Controllers\NHTSanPhamController;
use App\Http\Controllers\NHTHoaDonController;
use App\Http\Controllers\NHTLogin;
use App\Http\Controllers\NHTHomeController;
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
Route::get('/', function () {
    return view('welcome');
    });
Route::get('/nht-admins', function () {
    return view('layouts.Admins.NHT_master');
});


Route::get('/nht-admins/NHTindex', [NHTHomeController::class, 'NHTindex'])->name('NHTadmins.NHTHome.NHTindex');
Route::get('/nht-admins/NHTservices', [NHTHomeController::class, 'NHTservices'])->name('NHTadmins.NHTHome.NHTservices');
Route::get('/nht-admins/NHTabout', [NHTHomeController::class, 'NHTabout'])->name('NHTadmins.NHTHome.NHTabout');
Route::get('/nht-admins/NHTcontact', [NHTHomeController::class, 'NHTcontact'])->name('NHTadmins.NHTHome.NHTcontact');
route::get('/nht-admins/NHTSanPham/{id}', [NHTHomeController::class,'NHTShow'])->name('NHTadmins.NHTHome.NHTShow');

Route::get('/nht-admins/NHTLogin', [NHTLogin::class, 'NHTLoginForm'])->name('NHTLogin');
Route::post('/nht-admins/NHTLogin', [NHTLogin::class, 'NHTLogin']);
Route::post('/nht-admins/NHTLogout', function () {
    Auth::logout();
    return redirect('/nht-admins/NHTLogin');
})->name('NHTLogout');

Route::get('/nht-admins/NHTDashboard', function () {
    return view('layouts.Admins.NHT_master');
})->name('NHTDashboard')->middleware('auth');

#quantri
route::get('/nht-admins/NHTQuanTri',[NHTQuanTriController::class,'NHTList'])->name('NHTadmins.NHTQuanTri.NHTList');
//create
route::get('/nht-admins/NHTQuanTri/NHTCreate',[NHTQuanTriController::class,'NHTCreate'])->name('NHTadmins.NHTQuanTri.NHTCreate');
route::post('/nht-admins/NHTQuanTri/NHTCreate',[NHTQuanTriController::class,'NHTCreateSubmit'])->name('NHTadmins.NHTQuanTri.NHTCreateSubmit');
//edit
route::get('/nht-admins/NHTQuanTri/NHTEdit/{id}',[NHTQuanTriController::class,'NHTEdit'])->name('NHTadmins.NHTQuanTri.NHTEdit');
route::post('/nht-admins/NHTQuanTri/NHTEdit/{id}',[NHTQuanTriController::class,'NHTEditSubmit'])->name('NHTadmins.NHTQuanTri.NHTEditSubmit');
//delete
route::get('/nht-admins/NHTQuanTri/NHTDelete/{id}',[NHTQuanTriController::class,'NHTDelete'])->name('NHTadmins.NHTQuanTri.NHTDelete');

#khachhang
route::get('/nht-admins/NHTKhachHang', [NHTKhachHangController::class,'NHTList'])->name('NHTadmins.NHTKhachHang.NHTList');
route::get('/nht-admins/NHTKhachHang/NHTCreate', [NHTKhachHangController::class,'NHTCreate'])->name('NHTadmins.NHTKhachHang.NHTCreate');
route::post('/nht-admins/NHTKhachHang/NHTCreate', [NHTKhachHangController::class,'NHTCreateSubmit'])->name('NHTadmins.NHTKhachHang.NHTCreateSubmit');
route::get('/nht-admins/NHTKhachHang/NHTEdit/{id}', [NHTKhachHangController::class,'NHTEdit'])->name('NHTadmins.NHTKhachHang.NHTEdit');
route::post('/nht-admins/NHTKhachHang/NHTEdit/{id}', [NHTKhachHangController::class,'NHTEditSubmit'])->name('NHTadmins.NHTKhachHang.NHTEditSubmit');
route::get('/nht-admins/NHTKhachHang/NHTDelete/{id}', [NHTKhachHangController::class,'NHTDelete'])->name('NHTadmins.NHTKhachHang.NHTDelete');

#LoaiSanPham

route::get('/nht-admins/NHTLoaiSanPham', [NHTLoaiSanPhamController::class,'NHTList'])->name('NHTadmins.NHTLoaiSanPham.NHTList');
route::get('/nht-admins/NHTLoaiSanPham/NHTCreate', [NHTLoaiSanPhamController::class,'NHTCreate'])->name('NHTadmins.NHTLoaiSanPham.NHTCreate');
route::post('/nht-admins/NHTLoaiSanPham/NHTCreate', [NHTLoaiSanPhamController::class,'NHTCreateSubmit'])->name('NHTadmins.NHTLoaiSanPham.NHTCreateSubmit');
Route::get('/nht-admins/NHTLoaiSanPham/NHTEdit/{id}', [NHTLoaiSanPhamController::class, 'NHTEdit'])->name('NHTadmins.NHTLoaiSanPham.NHTEdit');
Route::post('/nht-admins/NHTLoaiSanPham/NHTEdit/{id}', [NHTLoaiSanPhamController::class, 'NHTEditSubmit'])->name('NHTadmins.NHTLoaiSanPham.NHTEditSubmit');
route::get('/nht-admins/NHTLoaiSanPham/NHTDelete/{id}', [NHTLoaiSanPhamController::class,'NHTDelete'])->name('NHTadmins.NHTLoaiSanPham.NHTDelete');
#SanPham
route::get('/nht-admins/NHTSanPham', [NHTSanPhamController::class,'NHTList'])->name('NHTadmins.NHTSanPham.NHTList');
route::get('/nht-admins/NHTSanPham/NHTCreate', [NHTSanPhamController::class,'NHTCreate'])->name('NHTadmins.NHTSanPham.NHTCreate');
route::post('/nht-admins/NHTSanPham/NHTCreate', [NHTSanPhamController::class,'NHTCreateSubmit'])->name('NHTadmins.NHTSanPham.NHTCreateSubmit');
route::get('/nht-admins/NHTSanPham/NHTEdit/{id}', [NHTSanPhamController::class,'NHTEdit'])->name('NHTadmins.NHTSanPham.NHTEdit');

route::post('/nht-admins/NHTSanPham/NHTEdit/{id}', [NHTSanPhamController::class,'NHTEditSubmit'])->name('NHTadmins.NHTSanPham.NHTEditSubmit');
route::get('/nht-admins/NHTSanPham/NHTDelete/{id}', [NHTSanPhamController::class,'NHTDelete'])->name('NHTadmins.NHTSanPham.NHTDelete');
#HoaDon
route::get('/nht-admins/NHTHoaDon', [NHTHoaDonController::class,'NHTList'])->name('NHTadmins.NHTHoaDon.NHTList');
route::get('/nht-admins/NHTHoaDon/NHTCreate', [NHTHoaDonController::class,'NHTCreate'])->name('NHTadmins.NHTHoaDon.NHTCreate');
route::post('/nht-admins/NHTHoaDon/NHTCreate', [NHTHoaDonController::class,'NHTCreateSubmit'])->name('NHTadmins.NHTHoaDon.NHTCreateSubmit');
route::get('/nht-admins/NHTHoaDon/NHTEdit/{id}', [NHTHoaDonController::class,'NHTEdit'])->name('NHTadmins.NHTHoaDon.NHTEdit');
route::post('/nht-admins/NHTHoaDon/NHTEdit/{id}{', [NHTHoaDonController::class,'NHTEditSubmit'])->name('NHTadmins.NHTHoaDon.NHTEditSubmit');
route::get('/nht-admins/NHTHoaDon/NHTDelete/{id}', [NHTHoaDonController::class,'NHTDelete'])->name('NHTadmins.NHTHoaDon.NHTDelete');
#ChiTietHoaDon
route::get('/nht-admins/NHTCTHoaDon', [NHTCTHoaDonController::class,'NHTCTList'])->name('NHTadmins.NHTCTHoaDon.NHTCTList');
route::get('/nht-admins/NHTCTHoaDon/NHTCTCreate', [NHTCTHoaDonController::class,'NHTCTCreate'])->name('NHTadmins.NHTCTHoaDon.NHTCTCreate');
route::post('/nht-admins/NHTCTHoaDon/NHTCTCreate', [NHTCTHoaDonController::class,'NHTCTCreateSubmit'])->name('NHTadmins.NHTCTHoaDon.NHTCTCreateSubmit');
route::get('/nht-admins/NHTCTHoaDon/NHTCTEdit/{id}', [NHTCTHoaDonController::class,'NHTCTEdit'])->name('NHTadmins.NHTCTHoaDon.NHTCTEdit');
route::post('/nht-admins/NHTCTHoaDon/NHTCTEdit/{id}', [NHTCTHoaDonController::class,'NHTCTEditSubmit'])->name('NHTadmins.NHTCTHoaDon.NHTCTEditSubmit');
route::get('/nht-admins/NHTCTHoaDon/NHTCTDelete/{id}', [NHTCTHoaDonController::class,'NHTCTDelete'])->name('NHTadmins.NHTCTHoaDon.NHTCTDelete');
