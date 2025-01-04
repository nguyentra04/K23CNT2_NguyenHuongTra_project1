
@extends('layouts.admins.NHT_master')
@section('title','Sửa thông tin loại sản phẩm ')
@section('content-body')
   <div class="container border">
    <div class="row">
        <div class="col">
            <form action="{{ route('NHTadmins.NHTSanPham.NHTEditSubmit'),['id' => $nhtsp->id]}}" method="post">
                @csrf
                <input type="hidden" name="id" id="id" value="{{ $nhtsp->id}}">
                <div class="card">
                    <div class="card-header">
                        <h2> Sửa thông tin loại sản phẩm  </h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="NHTMaSP" class="col-sm-2 col-form-label">Mã sản phẩm</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $nhtsp->NHTMaSP }}"
                                    id="NHTMaSP" name="NHTMaSP">
                                @error('NHTMaSP')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTTenSp" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                    value="{{ $nhtsp->NHTTenSP }}"id="NHTTenSP" name="NHTTenSP" value="{{ $nhtsp->NHTTenSP }}">
                                @error('NHTTenSP')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTHinhAnh" class="col-sm-2 col-form-label">Hình ảnh</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="NHTHinhAnh" name="NHTHinhAnh" value="{{ $nhtsp->NHTHinhAnh }}">
                                @error('NHTHinhAnh')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTMoTa" class="col-sm-2 col-form-label">Mô tả</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="NHTMoTa" name="NHTMoTa">{{ $nhtsp->NHTMoTa }}</textarea>
                                @error('NHTMoTa')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                        </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="NHTDonGia" class="col-sm-2 col-form-label"> Đơn Giá</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" value="{{ $nhtsp->NHTDonGia }}" id="NHTDonGia" name="NHTDonGia">
                                @error('NHTDonGia')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTSoLuong" class="col-sm-2 col-form-label">Số lượng</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" value="{{ $nhtsp->NHTSoLuong }}" id="NHTSoLuong" name="NHTSoLuong">
                                @error('NHTSoLuong')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTMaLoai" class="col-sm-2 col-form-label">Mã loại</label>
                            <div class="col-sm-10">
                                <input type="text" name="NHTMaLoai" id="NHTMaLoai" value="{{ $nhtsp->NHTMaLoai }}">
                                @error('NHTMaLoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTTrangThai" class="col-sm-2 col-form-label">Trạng Thái </label>
                            <div class="col-sm-10">
                                @if ($nhtsp->NHTTrangThai == 1){
                                    <input type="radio"  id="NHTTrangThai1" name="NHTTrangThai" value='1'
                                    checked>
                                        <label for="NHTTrangThai1">Hiển thị </label>
                                    &nbsp;
                                    <input type="radio"  id="NHTTrangThai0" name="NHTTrangThai" value='0'>
                                    <label for="NHTTrangThai0">Khóa</label>}  
                                @else {
                                    <input type="radio"  id="NHTTrangThai1" name="NHTTrangThai" value='0'>
                                    <label for="NHTTrangThai1">Hiển thị </label>
                                    &nbsp;
                                    <input type="radio"  id="NHTTrangThai0" name="NHTTrangThai" value='1'checked>
                                    <label for="NHTTrangThai0">Khóa</label>
                                }
                                @endif
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Lưu thay đổi</button>
                        <a href="{{ route('NHTadmins.NHTSanPham.NHTList', ['id' => $nhtsp->NHTMaSP]) }}" class="btn btn-secondary">Quay lại</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
   </div>
        


@endsection