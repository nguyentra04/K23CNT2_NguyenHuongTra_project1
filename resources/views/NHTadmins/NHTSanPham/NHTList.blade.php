@extends('layouts.admins.NHT_master')
@section('title', 'Danh sách sản phẩm')
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col-12">
                <h1>Danh sách loại sản phẩm</h1>
                <a href="{{ route('NHTadmins.NHTSanPham.NHTCreateSubmit') }}" class="btn btn-success">Thêm mới</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Mô tả</th>
                        <th>Đơn giá </th>
                        <th>Số lượng </th>
                        <th>Mã loại</th>
                        <th>Trạng thái </th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($nhtsp as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->NHTMaSP }}</td>
                            <td>{{ $item->NHTTenSP }}</td>
                            <td>
                                @if ($item->NHTHinhAnh)
                                    <img src="{{ asset($item->NHTHinhAnh) }}" alt="{{ $item->NHTTenSP }}" style="width: 100px; height: auto;">
                                @else
                                    <span>Không có ảnh</span>
                                @endif
                            </td>
                            <td>{{ $item->NHTMoTa }}</td>
                            <td>{{ number_format($item->NHTDonGia) }} VND</td>
                            <td>{{ $item->NHTSoLuong }}</td>
                            <td>{{ $item->NHTMaLoai }}</td>
                            <td>{{ $item->NHTTrangThai == 0 ? 'Hoạt động' : 'Không hoạt động' }}</td>
                            <td>
                                <a href="{{ route('NHTadmins.NHTSanPham.NHTEdit', $item->id) }}" class="btn btn-warning">Sửa</a>
                                <a href="{{ route('NHTadmins.NHTSanPham.NHTDelete', $item->id) }}" class="btn btn-danger" 
                                    onclick="return confirm('Bạn có chắc muốn xóa không ?')">Xóa</a>
                            </td>  
                        </tr>
                    @empty
                        <tr>
                            <td colspan="10" class="text-center">Chưa có thông tin sản phẩm</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
