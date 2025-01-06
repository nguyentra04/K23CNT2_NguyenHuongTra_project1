
@extends('layouts.admins.NHT_master')
@section('title','thêm mới hóa đơn chi tiết ')
@section('content-body')
   <div class="container border">
    <div class="row">
        <div class="col">
            <form action="{{ route('NHTadmins.NHTCTHoaDon.NHTCTCreateSubmit') }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h2> Thêm mới hóa đơn chi tiết</h2>
                    </div>
                    <div class="card-body  container-fluid">
                        <div class="mb-3 row">
                            <label for="NHTHoaDonID" class="col-sm-2 col-form-label">Mã hóa đơn</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="NHTHoaDonID" name="NHTHoaDonID" value="{{ old('NHTHoaDonID') }}">
                                @error('NHTHoaDonID')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTSanPhamID" class="col-sm-2 col-form-label">Mã sản phẩm</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="NHTSanPhamID" name="NHTSanPhamID" value="{{ old('NHTSanPhamID') }}">
                              @error('NHTSanPhamID')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTSoLuongMua" class="col-sm-2 col-form-label">Số lượng</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="NHTSoLuongMua" name="NHTSoLuongMua" value="{{ old('NHTSoLuongMua') }}">
                                @error('NHTSoLuongMua')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTDonGiaMua" class="col-sm-2 col-form-label">Đơn giá mua</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="NHTDonGiaMua" name="NHTDonGiaMua" value="{{ old('NHTDonGiaMua') }}">
                                @error('NHTDonGiaMua')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTThanhTien" class="col-sm-2 col-form-label">Thành tiền</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="NHTThanhTien" name="NHTThanhTien" value="{{ old('NHTThanhTien') }}">
                                @error('NHTThanhTien')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NHTTrangThai" class="col-sm-2 col-form-label">Trạng Thái </label>
                            <div class="col-sm-10">
                              <input type="radio"  id="NHTTrangThai0" name="NHTTrangThai" value='0'>
                              <label for="NHTTrangThai0">Hiển thị </label>
                                &nbsp;
                              <input type="radio"  id="NHTTrangThai0" name="NHTTrangThai" value='1'>
                              <label for="NHTTrangThai0">Khóa</label>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class=" btn btn-success" >Lưu</button>
                        <a href="{{route('NHTadmins.NHTCTHoaDon.NHTCTList')}}" class="btn btn-secondary">quay lai</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
   </div>
        


@endsection