@extends('layouts.admins.NHT_master')

@section('title', 'Danh sách loại sản phẩm')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col-12">
                <h1>Danh sách loại sản phẩm</h1>
                <a href="{{ route('NHTadmins.NHTLoaiSanPham.NHTCreateSubmit') }}" class="btn btn-success">Thêm mới</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã loại</th>
                        <th>Tên loại sản phẩm</th>
                        <th>Trạng thái</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($nhtloaisps as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->NHTMaLoai }}</td>
                            <td>{{ $item->NHTTenLoai }}</td>
                            <td>{{ $item->NHTTrangThai == 0 ? 'Khóa' : 'Hiển thị' }}</td>
                            <td>
                                <a href="{{ route('NHTadmins.NHTLoaiSanPham.NHTEdit', $item->id) }}" class="btn btn-warning">Sửa</a>
                                <form action="{{ route('NHTadmins.NHTLoaiSanPham.NHTDelete', $item->id) }}" method="post" style="display: inline-block;">
                                    @csrf
                                     @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa không?')">Xóa</button>
                                </form>  
                            </td>  
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Chưa có thông tin loại sản phẩm</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
