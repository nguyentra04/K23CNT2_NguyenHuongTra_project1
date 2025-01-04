
@extends('layouts.admins.NHT_master')
@section('title','thêm mới quản trị viên ')
@section('content-body')
   <div class="container border">
    <div class="row">
        <div class="col">
            <form action="{{ route('NHTadmins.NHTQuanTri.NHTCreateSubmit') }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h2> Thêm mới quản trị viên</h2>
                    </div>
                    <div class="card-body  container-fluid">
                        <div class="mb-3 row">
                            <label for="NHTTaiKhoan" class="col-sm-2 col-form-label">Tài khoản</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="NHTTaiKhoan" name="NHTTaiKhoan" value="{{ old('NHTTaiKhoan') }}">
                                @error('NHTTaiKhoan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTMatKhau" class="col-sm-2 col-form-label">Mật khẩu</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="NHTMatKhau" name="NHTMatKhau" value="{{ old('NHTMatKhau') }}">
                              @error('NHTMatKhau')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTGioiTinh" class="col-sm-2 col-form-label">Giới tính</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="NHTGioiTinh" name="NHTGioiTinh">
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
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
                                    <option value="Admin">Quản trị</option>
                                    <option value="Nhân viên">Nhân viên</option>
                                </select>
                                @error('NHTChucVu')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="NHTTrangThai" class="col-sm-2 col-form-label">Trạng Thái </label>
                            <div class="col-sm-10">
                              <input type="radio"  id="NHTTrangThai1" name="NHTTrangThai" value='0'>
                              <label for="NHTTrangThai1">Hiển thị </label>
                                &nbsp;
                              <input type="radio"  id="NHTTrangThai0" name="NHTTrangThai" value='1'>
                              <label for="NHTTrangThai0">Khóa</label>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class=" btn btn-success" >Lưu</button>
                        <a href="{{route('NHTadmins.NHTQuanTri.NHTList')}}" class="btn btn-secondary">quay lai</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
   </div>
        


@endsection