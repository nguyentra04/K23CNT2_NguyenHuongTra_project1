
@extends('layouts.admins.NHT_master')
@section('title','thêm mới khách hàng ')
@section('content-body')
   <div class="container border">
    <div class="row">
        <div class="col">
            <form action="{{ route('NHTadmins.NHTKhachHang.NHTCreateSubmit') }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h2> Thêm mới khách hàng</h2>
                    </div>
                    <div class="card-body  container-fluid">
                        <div class="mb-3 row">
                            <label for="NHTMaKH" class="col-sm-2 col-form-label">Mã khách </label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="NHTMaKH" name="NHTMaKH" value="{{ old('NHTMaKH') }}">
                                @error('NHTMaKH')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTTenKH" class="col-sm-2 col-form-label">Tên khách</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="NHTTenKH" name="NHTTenKH" value="{{ old('NHTTenKH') }}">
                              @error('NHTTenKH')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTDiaChi" class="col-sm-2 col-form-label">Địa chỉ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="NHTDiaChi" name="NHTDiaChi" value="{{ old('NHTDiaChi') }}">
                                @error('NHTDiaChi')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTSDT" class="col-sm-2 col-form-label">Số điện thoại</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="NHTSDT" nam
                                e="NHTSDT" value="{{ old('NHTSDT') }}">
                                @error('NHTSDT')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="NHTEmail" name="NHTEmail" value="{{ old('NHTEmail') }}">
                                @error('NHTEmail')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTNgaySinh" class="col-sm-2 col-form-label">Ngày sinh</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="NHTNgaySinh" name="NHTNgaySinh" value="{{ old('NHTNgaySinh') }}">
                                @error('NHTNgaySinh')
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
                        <a href="{{route('NHTadmins.NHTKhachHang.NHTList')}}" class="btn btn-secondary">quay lai</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
   </div>
        


@endsection