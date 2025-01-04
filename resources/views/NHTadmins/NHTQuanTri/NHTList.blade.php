@extends('layouts.admins.NHT_master')
@section('title', 'Danh sách quản trị viên')
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col-12">
                <h1>Danh sách quản trị viên </h1>
                <a href="{{route('NHTadmins.NHTQuanTri.NHTCreateSubmit') }}" class="btn btn-success">Thêm mới</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tài khoản</th>
                        <th>Mật khẩu</th>
                        <th>Giới tính</th>
                        <th>Chức vụ</th>
                        <th>Trạng thái </th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($nhtquantri as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $item->NHTTaiKhoan }}</td>
                            <td class="text-center">{{ $item->NHTMatKhau }}</td>
                            <td class="text-center">{{ $item->NHTGioiTinh }}</td>
                            <td class="text-center">{{ $item->NHTChucVu }}</td>
                            <td class="text-center">{{ $item->NHTTrangThai }}</td>
                            <td class="text-center">
                                <a href="{{ route('NHTadmins.NHTQuanTri.NHTEdit', $item->id) }}" class="btn btn-warning">Sửa</a>
                                <a href="{{ route('NHTadmins.NHTQuanTri.NHTDelete', $item->id) }}" class="btn btn-danger" 
                                    onclick="return confirm('Bạn có chắc muốn xóa không ?')">Xóa</a>
                            </td>  
                        </tr>
                    @empty
                        <th colspan="5"> Chưa có thông tin quản trị viên </th>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
    
        