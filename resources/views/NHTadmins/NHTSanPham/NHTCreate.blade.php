@extends('layouts.admins.NHT_master')
@section('title','Thêm mới loại sản phẩm')
@section('content-body')
   <div class="container border">
    <div class="row">
        <div class="col">
            <form action="{{ route('NHTadmins.NHTSanPham.NHTCreateSubmit') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h2> Thêm mới sản phẩm </h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="NHTMaSP" class="col-sm-2 col-form-label">Mã sản phẩm</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="NHTMaSP" name="NHTMaSP" value="{{ old('NHTMaSP') }}">
                              @error('NHTMaSP')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="NHTTenSP" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="NHTTenSP" name="NHTTenSP" value="{{ old('NHTTenSP') }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="NHTHinhAnh" class="col-sm-2 col-form-label">Hình ảnh</label>
                            <div class="col-sm-10">
                              <input type="file" class="form-control" id="NHTHinhAnh" name="NHTHinhAnh">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="NHTMoTa" class="col-sm-2 col-form-label">Mô tả</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="NHTMoTa" name="NHTMoTa" value="{{ old('NHTMoTa') }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="NHTDonGia" class="col-sm-2 col-form-label">Đơn giá</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="NHTDonGia" name="NHTDonGia" value="{{ old('NHTDonGia') }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="NHTSoLuong" class="col-sm-2 col-form-label">Số lượng</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="NHTSoLuong" name="NHTSoLuong" value="{{ old('NHTSoLuong') }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="NHTMaLoai" class="col-sm-2 col-form-label">Mã loại</label>
                            <div class="col-sm-10">
                              <select name="NHTMaLoai" id="NHTMaLoai" class="form-control">
                                  @foreach($nhtloaisps as $item)
                                      <option value="{{ $item->NHTMaLoai }}" {{ old('NHTMaLoai') == $item->NHTMaLoai ? 'selected' : '' }}>{{ $item->NHTTenLoai }}</option>
                                  @endforeach
                              </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="NHTTrangThai" class="col-sm-2 col-form-label">Trạng thái</label>
                            <div class="col-sm-10">
                              <input type="radio" id="NHTTrangThai0" name="NHTTrangThai" value="0" {{ old('NHTTrangThai') == '0' ? 'checked' : '' }}>
                              <label for="NHTTrangThai0">Hiển thị</label>
                                &nbsp;
                              <input type="radio" id="NHTTrangThai1" name="NHTTrangThai" value="1" {{ old('NHTTrangThai') == '1' ? 'checked' : '' }}>
                              <label for="NHTTrangThai1">Khóa</label>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Lưu</button>
                        <a href="{{ route('NHTadmins.NHTSanPham.NHTList') }}" class="btn btn-secondary">Quay lại</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
   </div>
@endsection
