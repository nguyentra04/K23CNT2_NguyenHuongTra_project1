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
        }

        .navbar {
            background-color: #FF8C94;
        }

        .navbar .navbar-brand img {
            width: 50px;
            height: auto;
        }

        .search-bar {
            width: 300px;
        }

        /* Layout */
        .container-fluid {
            display: flex;
            padding: 30px;
        }

        article {
            flex: 70%;
            margin-right: 30px;
        }

        aside {
            flex: 30%;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.1);
        }

        .product-card {
            background-color: #fff;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 20px;
        }

        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .product-card .product-title {
            font-size: 18px;
            color: #333;
            margin-top: 15px;
        }

        .product-card .product-price {
            font-size: 16px;
            color: #FF8C94;
            margin: 10px 0;
        }

        .product-card .btn {
            background-color: #FF8C94;
            color: white;
        }

        .product-card .btn:hover {
            background-color: #e26b7c;
        }

        .product-detail {
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.1);
        }

        .product-img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
        }

        .product-title {
            font-size: 28px;
            font-weight: bold;
            color: #333;
            margin-top: 20px;
        }

        .product-price {
            font-size: 24px;
            color: #FF8C94;
            margin: 20px 0;
        }

        .product-description {
            font-size: 16px;
            color: #555;
        }

        .btn-back {
            margin-top: 20px;
        }

        /* Sidebar */
        .aside-title {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .category-list {
            list-style-type: none;
            padding: 0;
        }

        .category-list li {
            margin-bottom: 10px;
        }

        .category-list a {
            color: #FF8C94;
            text-decoration: none;
        }

        .category-list a:hover {
            color: #e26b7c;
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" alt="Logo">
            </a>
            <form class="d-flex">
                <input class="form-control search-bar" type="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Tìm kiếm</button>
            </form>
        </div>
    </nav>

    <div class="container-fluid">
        <!-- Article - Product Grid -->
        <article>
            <h3 class="text-center">Các sản phẩm khác</h3>
            <div class="row">
                @foreach($nhtsp as $product) <!-- Giả sử bạn có mảng sản phẩm khác -->
                    <div class="col-md-4">
                        <div class="product-card">
                            <img src="{{ Storage::url($product->NHTHinhAnh) }}" alt="{{ $product->NHTTenSP }}">
                            <h4 class="product-title">{{ $product->NHTTenSP }}</h4>
                            <p class="product-price">{{ number_format($product->NHTDonGia, 0, ',', '.') }} VND</p>
                            <a href="{{ route('NHTadmins.NHTSanPham.show', $product->id) }}" class="btn">Xem chi tiết</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </article>

        <!-- Aside - Product Categories -->
        <aside>
            <h4 class="aside-title">Danh mục sản phẩm</h4>
            <ul class="category-list">
                @foreach($categories as $category) <!-- Giả sử bạn có mảng danh mục -->
                    <li><a href="{{ route('NHTadmins.NHTLoaiSanPham.show', $category->id) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </aside>
    </div>

    <!-- Product Detail -->
    <div class="product-detail">
        <img src="{{ Storage::url($nhtsp->NHTHinhAnh) }}" alt="{{ $nhtsp->NHTTenSP }}" class="product-img">
        <h2 class="product-title">{{ $nhtsp->NHTTenSP }}</h2>
        <p class="product-price">{{ number_format($nhtsp->NHTDonGia, 0, ',', '.') }} VND</p>
        <p class="product-description">{{ $nhtsp->NHTMoTa }}</p>
        <a href="{{ route('NHTadmins.NHTHome.NHTindex') }}" class="btn btn-secondary btn-back">Quay lại</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
