@extends('layouts.admins.NHT_master')
@section('title','Sửa thông tin quản trị viên ')
@section('content-body')
   <div class="container border">
    <div class="row">
        <div class="col">
            <form action="{{ route('NHTadmins.NHTQuanTri.NHTEditSubmit')}}" method="post">
                @csrf
                <input type="hidden" name="id" id="id" value="{{ $nhtquantri->id}}">
                <div class="card">
                    <div class="card-header">
                        <h2> Sửa thông tin quản trị viên  </h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="NHTTaiKhoan" class="col-sm-2 col-form-label">Tài khoản</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $nhtquantri->NHTTaiKhoan }}"
                                    id="NHTTaiKhoan" name="NHTTaiKhoan">
                                @error('NHTTaiKhoan')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTMatKhau" class="col-sm-2 col-form-label">Mật khẩu</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control"
                                    value="{{ $nhtquantri->NHTMatKhau }}"id="NHTMatKhau" name="NHTMatKhau" value="{{ $nhtquantri->NHTMatKhau }}">
                                @error('NHTMatKhau')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTGioiTinh" class="col-sm-2 col-form-label">Giới tính </label>
                            <div class="col-sm-10">
                                <select class="form-select" id="NHTGioiTinh" name="NHTGioiTinh">
                                    <option value="Nam"
                                        @if($nhtquantri->NHTGioiTinh == 'Nam') selected 
                                        @endif>Nam</option>
                                    <option value="Nữ"
                                        @if($nhtquantri->NHTGioiTinh == 'Nữ') selected
                                        @endif>Nữ</option>
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
                                    <option value="Quản trị viên"
                                        @if($nhtquantri->NHTChucVu == 'Quản trị viên') selected
                                        @endif>Quản trị viên</option>
                                    <option value="Nhân viên"
                                        @if($nhtquantri->NHTChucVu == 'Nhân viên') selected
                                        @endif>Nhân viên</option>
                                </select>
                                @error('NHTChucVu')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTTrangThai" class="col-sm-2 col-form-label">Trạng Thái </label>
                            <div class="col-sm-10">
                                @if ($nhtquantri->NHTTrangThai == 1){
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
                    <div class="modal" tabindex="-1">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Thông báo</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <p>Bạn có chắc muốn thay đổi ?</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                              <button type="button" class="btn btn-primary">Lưu thay đổi</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                        <a href="{{route('NHTadmins.NHTQuanTri.NHTList')}}" class="btn btn-secondary">Quay lại</a>
                    </div>     
            </form>
        </div>
    </div>
   </div>
@endsection

