@extends('layouts.admins.NHT_master')

@section('title', 'Sửa thông tin khách hàng')

@section('content-body')
<div class="container border mt-4">
    <div class="row">
        <div class="col">
            <form action="{{ route('NHTadmins.NHTKhachHang.NHTEditSubmit', ['id' => $nhtkh->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="id" value="{{ $nhtkh->id }}">

                <div class="card">
                    <div class="card-header">
                        <h2>Sửa thông tin khách</h2>
                    </div>
                    <div class="card-body container-fluid">
                        
           
                        <div class="mb-3 row">
                            <label for="NHTMaKH" class="col-sm-2 col-form-label">Mã khách</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="NHTMaKH" name="NHTMaKH" value="{{ $nhtkh->NHTMaKH }}">
                                @error('NHTMaKH')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                
                        <div class="mb-3 row">
                            <label for="NHTTenKH" class="col-sm-2 col-form-label">Tên khách</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="NHTTenKH" name="NHTTenKH" value="{{ $nhtkh->NHTTenKH }}">
                                @error('NHTTenKH')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="NHTDiaChi" class="col-sm-2 col-form-label">Địa chỉ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="NHTDiaChi" name="NHTDiaChi" value="{{ $nhtkh->NHTDiaChi }}">
                                @error('NHTDiaChi')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="NHTSDT" class="col-sm-2 col-form-label">Số điện thoại</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="NHTSDT" name="NHTSDT" value="{{ $nhtkh->NHTSDT }}">
                                @error('NHTSDT')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="NHTEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="NHTEmail" name="NHTEmail" value="{{ $nhtkh->NHTEmail }}">
                                @error('NHTEmail')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="NHTNgaySinh" class="col-sm-2 col-form-label">Ngày sinh</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="NHTNgaySinh" name="NHTNgaySinh" value="{{ $nhtkh->NHTNgaySinh }}">
                                @error('NHTNgaySinh')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="NHTGioiTinh" class="col-sm-2 col-form-label">Giới tính</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="NHTGioiTinh" name="NHTGioiTinh">
                                    <option value="Nam" {{ $nhtkh->NHTGioiTinh == 'Nam' ? 'selected' : '' }}>Nam</option>
                                    <option value="Nữ" {{ $nhtkh->NHTGioiTinh == 'Nữ' ? 'selected' : '' }}>Nữ</option>
                                </select>
                                @error('NHTGioiTinh')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="NHTTrangThai" class="col-sm-2 col-form-label">Trạng thái</label>
                            <div class="col-sm-10">
                                <input type="radio" id="NHTTrangThai0" name="NHTTrangThai" value="0" {{ $nhtkh->NHTTrangThai == 0 ? 'checked' : '' }}>
                                <label for="NHTTrangThai0">Hiển thị</label>
                                &nbsp;
                                <input type="radio" id="NHTTrangThai1" name="NHTTrangThai" value="1" {{ $nhtkh->NHTTrangThai == 1 ? 'checked' : '' }}>
                                <label for="NHTTrangThai1">Khóa</label>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <div class="modal" tabindex="-1" id="confirmModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Thông báo</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Bạn có chắc muốn thay đổi?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmModal">Lưu thay đổi</button>
                        <a href="{{ route('NHTadmins.NHTKhachHang.NHTList') }}" class="btn btn-secondary">Quay lại</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
