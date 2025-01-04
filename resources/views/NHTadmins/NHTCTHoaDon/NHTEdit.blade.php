@extends('layouts.admins.NHT_master')

@section('title', 'Sửa thông tin hóa đơn chi tiết')

@section('content-body')
   <div class="container border mt-4">
        <form action="{{ route('NHTadmins.NHTCTHoaDon.NHTCTEditSubmit',['id' => $NHTCTHoaDon->id])}}" method="POST">
            @csrf
            <input type="hidden" name="id" id="id" value="{{ $NHTCTHoaDon->id }}">
            <div class="card">
                <div class="card-header">
                    <h2>Sửa thông tin hóa đơn chi tiết</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="NHTHoaDonID" class="col-sm-2 col-form-label">Mã hóa đơn</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="NHTHoaDonID" name="NHTHoaDonID" value="{{ $NHTHoaDon->NHTHoaDonID }}">
                            @error('NHTHoaDonID')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="NHTSanPhamID" class="col-sm-2 col-form-label">Mã sản phẩm</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="NHTSanPhamID" name="NHTSanPhamID" value="{{ $NHTHoaDon->NHTSanPhamID }}">
                            @error('NHTSanPhamID')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="NHTSoLuongMua" class="col-sm-2 col-form-label">Số lượng</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="NHTSoLuongMua" name="NHTSoLuongMua" value="{{ $NHTHoaDon->NHTSoLuongMua }}">
                            @error('NHTSoLuongMua')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="NHTDonGiaMua" class="col-sm-2 col-form-label">Đơn giá</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="NHTDonGiaMua" name="NHTDonGiaMua" value="{{ $NHTHoaDon->NHTDonGiaMua }}">
                            @error('NHTDonGiaMua')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="NHTThanhTien" class="col-sm-2 col-form-label">Thành tiền</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="NHTThanhTien" name="NHTThanhTien" value="{{ $NHTHoaDon->NHTThanhTien }}">
                            @error('NHTThanhTien')
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
                    <a href="{{route('NHTadmins.NHTCTHoaDon.NHTList')}}" class="btn btn-secondary">Quay lại</a>
                </div>
            </div>
        </form>
   </div>
@endsection
