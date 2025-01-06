@extends('layouts.Admins.NHT_master')

@section('title', 'Danh sách hóa đơn')

@section('content-body')
    <h1>Danh sách hóa đơn</h1>
    <a href="{{ route('NHTadmins.NHTCTHoaDon.NHTCTCreateSubmit') }}" class="btn btn-primary">Thêm mới</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Mã hóa đơn</th>
                <th class="text-center">Mã khách</th>
                <th class="text-center">Ngày HD</th>
                <th class="text-center">Họ tên khách</th>
                <th class="text-center">Tổng trị giá</th>
                <th class="text-center">Trạng thái</th>
                <th class="text-center">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($NHTCTHoaDon as $item)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $item->NHTMaHD }}</td>
                    <td class="text-center">{{ $item->NHTKhachHang->NHTMaKH ?? 'Không xác định' }}</td>
                    <td class="text-center">{{ $item->NHTNgayHD }}</td>
                    <td class="text-center">{{ $item->NHTHoTenKH }}</td>
                    <td class="text-center">{{ number_format($item->NHTTongTriGia, 0, ',', '.') }} đ</td>
                    <td class="text-center">{{ $item->NHTTrangThai ? 'Kích hoạt' : 'Không kích hoạt' }}</td>
                    <td class="text-center">
                        <a href="{{ route('NHTadmins.NHTCTHoaDon.NHTCTEdit', $item->id) }}" class="btn btn-warning">Sửa</a>
                        <a href="{{ route('NHTadmins.NHTCTHoaDon.NHTCTDelete', $item->id) }}" class="btn btn-danger" 
                            onclick="return confirm('Bạn có chắc muốn xóa không?')">Xóa</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">Chưa có thông tin hóa đơn</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
