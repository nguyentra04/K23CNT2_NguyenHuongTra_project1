@extends('layouts.admins.NHT_master')

@section('title', 'Sửa thông tin quản trị viên')

@section('content-body')
   <div class="container border">
    <div class="row">
        <div class="col">
            <form action="{{ route('NHTadmins.NHTQuanTri.NHTEditSubmit', $nhtquantri->id) }}" method="post">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="id" value="{{ $nhtquantri->id }}">
                <div class="card">
                    <div class="card-header">
                        <h2>Sửa thông tin quản trị viên</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="NHTTaiKhoan" class="col-sm-2 col-form-label">Tài khoản</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ old('NHTTaiKhoan', $nhtquantri->NHTTaiKhoan) }}" id="NHTTaiKhoan" name="NHTTaiKhoan">
                                @error('NHTTaiKhoan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTMatKhau" class="col-sm-2 col-form-label">Mật khẩu</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="NHTMatKhau" name="NHTMatKhau" value="{{ old('NHTMatKhau', $nhtquantri->NHTMatKhau) }}">
                                @error('NHTMatKhau')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTGioiTinh" class="col-sm-2 col-form-label">Giới tính</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="NHTGioiTinh" name="NHTGioiTinh">
                                    <option value="Nam" {{ old('NHTGioiTinh', $nhtquantri->NHTGioiTinh) == 'Nam' ? 'selected' : '' }}>Nam</option>
                                    <option value="Nữ" {{ old('NHTGioiTinh', $nhtquantri->NHTGioiTinh) == 'Nữ' ? 'selected' : '' }}>Nữ</option>
                                </select>
                                @error('NHTGioiTinh')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTChucVu" class="col-sm-2 col-form-label">Chức vụ</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="NHTChucVu" name="NHTChucVu">
                                    <option value="Quản trị viên" {{ old('NHTChucVu', $nhtquantri->NHTChucVu) == 'Quản trị viên' ? 'selected' : '' }}>Quản trị viên</option>
                                    <option value="Nhân viên" {{ old('NHTChucVu', $nhtquantri->NHTChucVu) == 'Nhân viên' ? 'selected' : '' }}>Nhân viên</option>
                                </select>
                                @error('NHTChucVu')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTTrangThai" class="col-sm-2 col-form-label">Trạng thái</label>
                            <div class="col-sm-10">
                                <input type="radio" id="NHTTrangThai0" name="NHTTrangThai" value="0" {{ old('NHTTrangThai', $nhtquantri->NHTTrangThai) == 0 ? 'checked' : '' }}>
                                <label for="NHTTrangThai0">Hiển thị</label>
                                &nbsp;
                                <input type="radio" id="NHTTrangThai1" name="NHTTrangThai" value="1" {{ old('NHTTrangThai', $nhtquantri->NHTTrangThai) == 1 ? 'checked' : '' }}>
                                <label for="NHTTrangThai1">Khóa</label>
                            </div>                        
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                        <a href="{{ route('NHTadmins.NHTQuanTri.NHTList') }}" class="btn btn-secondary">Quay lại</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
   </div>
@endsection
