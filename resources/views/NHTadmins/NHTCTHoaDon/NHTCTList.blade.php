@extends('layouts.Admins.NHT_master')

@section('title', 'Danh sách hóa đơn')

@section('content-body')
    <h1>Danh sách hóa đơn chi tiết </h1>
    <a href="{{ route('NHTadmins.NHTCTHoaDon.NHTCTCreateSubmit') }}" class="btn btn-primary mb-3">Thêm mới</a>
    
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
                    <td class="text-center">{{ $item->NHTHoaDonID }}</td>
                    <td class="text-center">{{ $item->NHTSanPhamID }}</td>
                    <td class="text-center">{{ \Carbon\Carbon::parse($item->NHTNgayHD)->format('d/m/Y') }}</td>
                    <td class="text-center">{{ $item->NHTHoTenKhach }}</td>
                    <td class="text-center">{{ number_format($item->NHTThanhTien, 0, ',', '.') }} đ</td>
                    <td class="text-center">{{ $item->NHTTrangThai ? 'Kích hoạt' : 'Không kích hoạt' }}</td>
                    <td class="text-center">
                        <a href="{{ route('NHTadmins.NHTCTHoaDon.NHTCTEdit', $item->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        
                        <form action="{{ route('NHTadmins.NHTCTHoaDon.NHTCTDelete', $item->id) }}" method="post" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa không?')">Xóa</button>
                        </form>
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
