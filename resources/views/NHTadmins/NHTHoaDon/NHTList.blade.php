@extends('layouts.Admins.NHT_master')

@section('title', 'Danh sách hóa đơn')

@section('content-body')
    <h1 class="mb-4">Danh sách hóa đơn</h1>
    <a href="{{ route('NHTadmins.NHTHoaDon.NHTcreate') }}" class="btn btn-primary">Thêm mới</a>
    <table class="table mt-4 table-bordered">
        <thead class="table-dark">
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Mã hóa đơn</th>
                <th class="text-center">Mã khách</th>
                <th class="text-center">Ngày hóa đơn</th>
                <th class="text-center">Họ tên khách</th>
                <th class="text-center">Tổng trị giá</th>
                <th class="text-center">Trạng thái</th>
                <th class="text-center">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($NHTHoaDon as $item)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $item->NHTMaHD }}</td>
                    <td class="text-center">{{ $item->NHTKhachHang->NHTMaKH ?? 'Không xác định' }}</td>
                    <td class="text-center">{{ Carbon::parse($item->NHTNgayHD)->format('d-m-Y') }}</td>
                    <td class="text-center">{{ $item->NHTHoTenKH }}</td>
                    <td class="text-center">{{ number_format($item->NHTTongTriGia, 0, ',', '.') }} đ</td>
                    <td class="text-center">
                        {{ $item->NHTTrangThai ? 'Hiển thị' : 'Không hiển thị' }}
                    </td>
                    <td class="text-center">
                        <a href="{{ route('NHTadmins.NHTHoaDon.NHTEdit', $item->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('NHTadmins.NHTHoaDon.NHTDelete', $item->id) }}" method="post" 
                            style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" 
                                onclick="return confirm('Bạn có chắc muốn xóa không?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center text-muted">Chưa có thông tin hóa đơn</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
