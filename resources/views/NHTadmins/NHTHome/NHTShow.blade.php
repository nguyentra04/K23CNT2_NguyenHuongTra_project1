<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            padding: 20px;
        }

        .product-container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.1);
        }

        .product-header {
            display: flex;
            gap: 20px;
        }

        .product-image {
            width: 50%;
            border-radius: 10px;
            object-fit: cover;
        }

        .product-details {
            flex: 1;
        }

        .product-title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 20px;
            color: #FF8C94;
            margin-bottom: 20px;
        }

        .product-description {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }

        .add-to-cart-btn {
            display: block;
            background-color: #f0b5b5;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            text-align: center;
            font-size: 16px;
            text-decoration: none;
        }

        .add-to-cart-btn:hover {
            background-color: #f0b5b5;
            text-decoration: none;
        }

        .back-to-shop {
            margin-top: 20px;
            display: inline-block;
            color: #555;
            font-size: 14px;
            text-decoration: none;
        }

        .back-to-shop:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="product-container">
        <div class="product-header">
            <img src="{{ asset($nhtsp->NHTHinhAnh) }}" alt="{{ $nhtsp->NHTTenSP }}" class="product-image">
            <div class="product-details">
                <h1 class="product-title">{{ $nhtsp->NHTTenSP }}</h1>
                <p class="product-price">{{ number_format($nhtsp->NHTDonGia, 0, ',', '.') }} VND</p>
                <p class="product-description">{{ $nhtsp->NHTMoTa }}</p>
                <a href="#" class="add-to-cart-btn">Thêm vào giỏ hàng</a>
            </div>
        </div>
        <a href="{{ route('NHTadmins.NHTHome.NHTindex') }}" class="back-to-shop">Quay lại trang sản phẩm</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
