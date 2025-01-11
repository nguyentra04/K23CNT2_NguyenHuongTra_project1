@extends('layouts.admins.NHT_master')

@section('title', 'Sửa thông tin loại sản phẩm')

@section('content-body')
   <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{ route('NHTadmins.NHTLoaiSanPham.NHTEditSubmit', $nhtloaisp->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="id" value="{{ $nhtloaisp->id }}">
                    <div class="card">
                        <div class="card-header">
                            <h2>Sửa thông tin loại sản phẩm</h2>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="NHTMaLoai" class="col-sm-2 col-form-label">Mã Loại</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ old('NHTMaLoai', $nhtloaisp->NHTMaLoai) }}" id="NHTMaLoai" name="NHTMaLoai">
                                    @error('NHTMaLoai')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="NHTTenLoai" class="col-sm-2 col-form-label">Tên Loại</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ old('NHTTenLoai', $nhtloaisp->NHTTenLoai) }}" id="NHTTenLoai" name="NHTTenLoai">
                                    @error('NHTTenLoai')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="NHTTrangThai" class="col-sm-2 col-form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="NHTTrangThai0" name="NHTTrangThai" value="0" {{ old('NHTTrangThai', $nhtloaisp->NHTTrangThai) == 0 ? 'checked' : '' }}>
                                    <label for="NHTTrangThai0">Hiển thị</label>
                                    &nbsp;
                                    <input type="radio" id="NHTTrangThai1" name="NHTTrangThai" value="1" {{ old('NHTTrangThai', $nhtloaisp->NHTTrangThai) == 1 ? 'checked' : '' }}>
                                    <label for="NHTTrangThai1">Khóa</label>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Lưu</button>
                            <a href="{{ route('NHTadmins.NHTLoaiSanPham.NHTList') }}" class="btn btn-secondary">Quay lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
   </div>
@endsection
