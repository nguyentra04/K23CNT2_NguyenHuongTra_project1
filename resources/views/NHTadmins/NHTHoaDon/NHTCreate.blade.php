
@extends('layouts.admins.NHT_master')
@section('title','thêm mới hóa đơn ')
@section('content-body')
   <div class="container border">
    <div class="row">
        <div class="col">
            <form action="{{ route('NHTadmins.NHTHoaDon.NHTCreateSubmit') }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h2> Thêm mới hóa đơn</h2>
                    </div>
                    <div class="card-body  container-fluid">
                        <div class="mb-3 row">
                            <label for="NHTMaHD" class="col-sm-2 col-form-label">Mã hóa đơn</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="NHTMaHD" name="NHTMaHD" value="{{ old('NHTMaHD') }}">
                                @error('NHTMaHD')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTMaKH" class="col-sm-2 col-form-label">Mã khách</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="NHTMaKH" name="NHTMaKH" value="{{ old('NHTMaKH') }}">
                              @error('NHTMaKH')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTNgayHD" class="col-sm-2 col-form-label">Ngày HD</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="NHTNgayHD" name="NHTNgayHD" value="{{ old('NHTNgayHD') }}">
                                @error('NHTNgayHD')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTHoTenKH" class="col-sm-2 col-form-label">Họ tên khách</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="NHTHoTenKH"name="NHTHoTenKH" value="{{ old('NHTHoTenKH') }}">
                                @error('NHTHoTenKH')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTTongTriGia" class="col-sm-2 col-form-label">Tổng tiền</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="NHTTongTriGGia" name="NHTTongTriGia" value="{{ old('NHTTongTriGia') }}">
                                @error('NHTTongTriGia')
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
                        <a href="{{route('NHTadmins.NHTHoaDon.NHTList')}}" class="btn btn-secondary">quay lai</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
   </div>
        


@endsection