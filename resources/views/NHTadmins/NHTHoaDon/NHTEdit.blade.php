@extends('layouts.admins.NHT_master')

@section('title', 'Sửa thông tin hóa đơn')

@section('content-body')
<div class="container border mt-4">
    @if (isset($NHTHoaDon))
    <form action="{{ route('NHTadmins.NHTHoaDon.NHTEditSubmit',  $NHTHoaDon->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" id="id" value="{{ $NHTHoaDon->id }}">

        <div class="card">
            <div class="card-header">
                <h2>Sửa thông tin hóa đơn</h2>
            </div>
            <div class="card-body">
    
                <div class="mb-3 row">
                    <label for="NHTMaHD" class="col-sm-2 col-form-label">Mã hóa đơn</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="NHTMaHD" name="NHTMaHD" value="{{ old('NHTMaHD', $NHTHoaDon->NHTMaHD) }}">
                        @error('NHTMaHD')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="NHTMaKH" class="col-sm-2 col-form-label">Mã khách</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="NHTMaKH" name="NHTMaKH" value="{{ old('NHTMaKH', $NHTHoaDon->NHTMaKH) }}">
                        @error('NHTMaKH')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

       
                <div class="mb-3 row">
                    <label for="NHTNgayHD" class="col-sm-2 col-form-label">Ngày hóa đơn</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="NHTNgayHD" name="NHTNgayHD" value="{{ old('NHTNgayHD', $NHTHoaDon->NHTNgayHD) }}">
                        @error('NHTNgayHD')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="NHTHoTenKH" class="col-sm-2 col-form-label">Họ tên khách</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="NHTHoTenKH" name="NHTHoTenKH" value="{{ old('NHTHoTenKH', $NHTHoaDon->NHTHoTenKH) }}">
                        @error('NHTHoTenKH')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="NHTTongTriGia" class="col-sm-2 col-form-label">Tổng trị giá</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="NHTTongTriGia" name="NHTTongTriGia" value="{{ old('NHTTongTriGia', $NHTHoaDon->NHTTongTriGia) }}">
                        @error('NHTTongTriGia')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Trạng thái</label>
                    <div class="col-sm-10">
                        <input type="radio" id="NHTTrangThai0" name="NHTTrangThai" value="0" {{ $NHTHoaDon->NHTTrangThai == 0 ? 'checked' : '' }}>
                        <label for="NHTTrangThai0">Hiển thị</label>
                        &nbsp;
                        <input type="radio" id="NHTTrangThai1" name="NHTTrangThai" value="1" {{ $NHTHoaDon->NHTTrangThai == 1 ? 'checked' : '' }}>
                        <label for="NHTTrangThai1">Khóa</label>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                <a href="{{ route('NHTadmins.NHTHoaDon.NHTList') }}" class="btn btn-secondary">Quay lại</a>
            </div>
        </div>
    </form>
    @else
        <p class="text-danger">Không tìm thấy thông tin hóa đơn.</p>
    @endif
</div>
@endsection
