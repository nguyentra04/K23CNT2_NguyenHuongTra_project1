@extends('layouts.admins.NHT_master')
@section('title', 'Sửa thông tin sản phẩm')
@section('content-body')
   <div class="container border">
    <div class="row">
        <div class="col">
            <form action="{{ route('NHTadmins.NHTSanPham.NHTEditSubmit', $nhtsp->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $nhtsp->id }}">
                <div class="card">
                    <div class="card-header">
                        <h2> Sửa thông tin sản phẩm </h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="NHTMaSP" class="col-sm-2 col-form-label">Mã sản phẩm</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $nhtsp->NHTMaSP ?? '' }}" id="NHTMaSP" name="NHTMaSP">
                                @error('NHTMaSP')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="NHTTenSP" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $nhtsp->NHTTenSP ?? '' }}" id="NHTTenSP" name="NHTTenSP">
                                @error('NHTTenSP')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="NHTHinhAnh" class="col-sm-2 col-form-label">Hình ảnh</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="NHTHinhAnh" name="NHTHinhAnh">
                                @if ($nhtsp->NHTHinhAnh)
                                    <div class="mt-2">
                                        <img src="{{ asset($nhtsp->NHTHinhAnh) }}" alt="Hình ảnh hiện tại" style="width: 150px; height: auto;">
                                    </div>
                                @endif
                                @error('NHTHinhAnh')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="NHTMoTa" class="col-sm-2 col-form-label">Mô tả</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="NHTMoTa" name="NHTMoTa">{{ $nhtsp->NHTMoTa ?? '' }}</textarea>
                                @error('NHTMoTa')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="NHTDonGia" class="col-sm-2 col-form-label">Đơn giá</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" value="{{ $nhtsp->NHTDonGia ?? '' }}" id="NHTDonGia" name="NHTDonGia">
                                @error('NHTDonGia')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="NHTSoLuong" class="col-sm-2 col-form-label">Số lượng</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" value="{{ $nhtsp->NHTSoLuong ?? '' }}" id="NHTSoLuong" name="NHTSoLuong">
                                @error('NHTSoLuong')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTMaLoai" class="col-sm-2 col-form-label">Mã loại</label>
                            <div class="col-sm-10">
                                <select name="NHTMaLoai" id="NHTMaLoai" class="form-control">
                                    <option value="">Chọn mã loại</option> 
                                    @foreach($nhtloaisps as $item)
                                        <option value="{{ $item->NHTMaLoai }}" 
                                                {{ old('NHTMaLoai', $nhtsp->NHTMaLoai ?? '') == $item->NHTMaLoai ? 'selected' : '' }}>
                                                {{ $item->NHTTenLoai }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('NHTMaLoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTTrangThai" class="col-sm-2 col-form-label">Trạng thái</label>
                            <div class="col-sm-10">
                                <input type="radio" id="NHTTrangThai0" name="NHTTrangThai" value="0" 
                                    {{ $nhtsp->NHTTrangThai == 0 ? 'checked' : '' }}>
                                <label for="NHTTrangThai0">Hiển thị</label>
                                &nbsp;
                                <input type="radio" id="NHTTrangThai1" name="NHTTrangThai" value="1" 
                                    {{ $nhtsp->NHTTrangThai == 1 ? 'checked' : '' }}>
                                <label for="NHTTrangThai1">Khóa</label>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                        <a href="{{ route('NHTadmins.NHTSanPham.NHTList') }}" class="btn btn-secondary">Quay lại</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
   </div>
@endsection
