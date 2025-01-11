@extends('layouts.admins.NHT_master')

@section('title', 'Danh sách Khách hàng')

@section('content-body')
<div class="container border mt-4">
    <div class="row mb-3">
        <div class="col-12">
            <h1>Danh sách khách hàng</h1>
            <a href="{{ route('NHTadmins.NHTKhachHang.NHTCreateSubmit') }}" class="btn btn-success">Thêm mới</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã khách</th>
                        <th>Tên khách</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Ngày sinh</th>
                        <th>Giới tính</th>
                        <th>Trạng thái</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($nhtkh as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $item->NHTMaKH }}</td>
                            <td class="text-center">{{ $item->NHTTenKH }}</td>
                            <td class="text-center">{{ $item->NHTDiaChi }}</td>
                            <td class="text-center">{{ $item->NHTSDT }}</td>
                            <td class="text-center">{{ $item->NHTEmail }}</td>
                            <td class="text-center">{{ $item->NHTNgaySinh }}</td>
                            <td class="text-center">{{ $item->NHTGioiTinh }}</td>
                            <td class="text-center">{{ $item->NHTTrangThai == 0 ? 'Hiển thị' : 'Khóa' }}</td>
                            <td class="text-center">
                                <a href="{{ route('NHTadmins.NHTKhachHang.NHTEdit', $item->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                                <form action="{{ route('NHTadmins.NHTKhachHang.NHTDelete', $item->id) }}" method="post" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa không?')">Xóa</button>
                                </form>    
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="10" class="text-center">Chưa có thông tin khách hàng</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
