@extends('layouts.admins.NHT_master')

@section('title', 'Sửa thông tin hóa đơn')

@section('content-body')
   <div class="container border mt-4">
        <form action="{{ route('NHTadmins.NHTHoaDon.NHTEditSubmit') }}" method="POST">
            @csrf
            <input type="hidden" name="id" id="id" value="{{ $NHTHoaDon->id }}">
            <div class="card">
                <div class="card-header">
                    <h2>Sửa thông tin hóa đơn</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="NHTMaHD" class="col-sm-2 col-form-label">Mã hóa đơn</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="NHTMaHD" name="NHTMaHD" value="{{ $NHTHoaDon->NHTMaHD }}">
                            @error('NHTMaHD')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="NHTMaKH" class="col-sm-2 col-form-label">Mã khách</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="NHTMaKH" name="NHTMaKH" value="{{ $NHTHoaDon->NHTMaKH }}">
                            @error('NHTMaKH')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="NHTNgayHD" class="col-sm-2 col-form-label">Ngày hóa đơn</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="NHTNgayHD" name="NHTNgayHD" value="{{ $NHTHoaDon->NHTNgayHD }}">
                            @error('NHTNgayHD')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="NHTHoTenKH" class="col-sm-2 col-form-label">Họ tên khách</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="NHTHoTenKH" name="NHTHoTenKH" value="{{ $NHTHoaDon->NHTHoTenKH }}">
                            @error('NHTHoTenKH')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="NHTTongTriGia" class="col-sm-2 col-form-label">Tổng trị giá</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="NHTTongTriGia" name="NHTTongTriGia" value="{{ $NHTHoaDon->NHTTongTriGia }}">
                            @error('NHTTongTriGia')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Trạng thái</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="NHTTrangThai1" name="NHTTrangThai" value="1" {{ $NHTHoaDon->NHTTrangThai == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="NHTTrangThai1">Hiển thị</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="NHTTrangThai0" name="NHTTrangThai" value="0" {{ $NHTHoaDon->NHTTrangThai == 0 ? 'checked' : '' }}>
                                <label class="form-check-label" for="NHTTrangThai0">Khóa</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
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
                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Lưu thay đổi</button>
                    <a href="{{route('NHTadmins.NHTHoaDon.NHTList')}}" class="btn btn-secondary">Quay lại</a>
                </div>
            </div>
        </form>
   </div>
@endsection
