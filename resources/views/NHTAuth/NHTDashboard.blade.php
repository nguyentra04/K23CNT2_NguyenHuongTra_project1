@extends('layouts.admins.NHT_master') 

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <h1 class="mb-4">Chào mừng đến với Dashboard</h1>
        <div class="row g-3">
            <div class="col-md-4">
                <div class="card bg-info text-white">
                    <div class="card-body">
                        <h5 class="card-title">Tổng sản phẩm</h5>
                        <p class="card-text">{{ $nhtsp }} sản phẩm đã được thêm vào cửa hàng.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title">Tổng đơn hàng</h5>
                        <p class="card-text">{{ $NHTHoaDon }} đơn hàng đã được xử lý.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-warning text-white">
                    <div class="card-body">
                        <h5 class="card-title">Tổng doanh thu</h5>
                        <p class="card-text">{{ number_format($NHTCTHoaDon) }} VND</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Thống kê sản phẩm bán chạy</h5>
                    </div>
                    <div class="card-body">
                        <p>Danh sách sản phẩm bán chạy nhất sẽ được hiển thị tại đây.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
