<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ - NHT Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
        }

        /* Header */
        .header-container {
            background-color: #f7f7f7;
            padding: 15px 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .logo img {
            height: 50px;
            width: 50px;
        }

        .navbar-nav .nav-link {
            font-size: 18px;
            color: #8db2c6;
            margin: 0 10px;
        }

        .search-bar {
            width: 300px;
            margin-left: 20px;
        }

        /* Danh mục sản phẩm - Navigation thứ 2 */
        .product-category-navbar {
            background-color: #f7f7f7; 
            padding: 10px 0;
        }

        .product-category-navbar .container {
            padding: 0;
        }

        .product-category-navbar .navbar-nav {
            display: flex;
            justify-content: space-evenly;
            width: 100%;
        }

        .product-category-navbar .nav-link {
            color: #8db2c6;
            font-size: 16px;
            padding: 10px 15px;
            text-align: center;
        }

        .product-category-navbar .nav-link:hover {
            background-color: #f7f7f7; 
        }

        /* Dropdown menu */
        .product-category-navbar .dropdown-menu {
            background-color: #f7f7f7; 
            border: none;
            display: none;
            opacity: 0;
            transform: translateY(10px);
        }
        .product-category-navbar .nav-item.dropdown:hover .dropdown-menu,
        .product-category-navbar .nav-item.dropdown:focus-within .dropdown-menu {
            display: block; 
            transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
            opacity: 1;
            transform: translateY(0); 
        }
        .product-category-navbar .dropdown-item {
            color: #8db2c6; 
        }

        .product-category-navbar .dropdown-menu .dropdown-item:hover {
            background-color:#f7f7f7; 
            color: #f0b5b5;
            transform: scale(1.05); 
            transition: transform 0.2s ease;
        }
        .product-category-navbar .dropdown-menu .dropdown-item:focus {
            background-color: #f7f7f7;
            color: black;
            transform: scale(1.05);
            transition: transform 0.2s ease;
        }
        .container-main {
            display: flex;
            margin: 20px;
            gap: 20px;
        }

        article {
            flex: 70%;
            background-color: #f7f7f7;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.1);
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
        }

        .product-card {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .product-card .info {
            padding: 10px;
            text-align: center;
        }

        .product-card .info h5 {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            margin: 10px 0;
        }

        .product-card .info p {
            color: #f0b5b5;
            font-weight: bold;
        }

        .product-card .btn-group {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
        }

        /* Sidebar */
        aside {
            flex: 30%;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.1);
        }

        .aside-banner img {
            width: 100%;
            border-radius: 10px;
        }

        .aside-products .product-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .aside-products img {
            width: 50px;
            height: 50px;
            border-radius: 5px;
            margin-right: 10px;
        }

        /* Footer */
        footer {
            background-color:#f7f7f7 ;
            color: #333;
            text-align: center;
            padding: 20px 10px;
            margin-top: 20px;
        }

        footer a {
            color: #f7f7f7;
            text-decoration: none;
        }
        .btn-btn-primary{
            background-color: #8db2c6;
            color: white;
            border-color: #8db2c6;
            border-radius: 5px;
            padding: 5px 10px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .btn-btn-primary:hover{
            background-color: #4f6d7a;
            }
        .btn-btn-outline-primary{
            background-color: transparent;
            color: #8db2c6;
            border-color: #8db2c6;
            border-radius: 5px;
            padding: 5px 10px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="header-container">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="/images/logo.png" style="width: 70px; height: auto" alt="Logo">
            </div>
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/nht-admins">Trang chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="/nht-admins/services">Dịch vụ</a></li>
                    <li class="nav-item"><a class="nav-link" href="/nht-admins/about">Giới thiệu</a></li>
                    <li class="nav-item"><a class="nav-link" href="/nht-admins/contact">Liên hệ</a></li>
                </ul>
            </nav>
            <form class="d-flex">
                <input class="form-control search-bar" type="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Tìm kiếm</button>
            </form>
        </div>
    </div>

    <!-- Danh mục sản phẩm - Navigation thứ 2 -->
    <div class="product-category-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Vở viết</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/products?category=notebook">Tất cả Vở viết</a></li>
                            <li><a class="dropdown-item" href="/products?category=notebook1">Vở Kẻ Ngang</a></li>
                            <li><a class="dropdown-item" href="/products?category=notebook2">Vở Kẻ Ô</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sổ tay</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/products?category=Planner">Tất cả Sổ tay</a></li>
                            <li><a class="dropdown-item" href="/products?category=Planner1">Sổ tay kế hoạch</a></li>
                            <li><a class="dropdown-item" href="/products?category=Planner2">Sổ tay ghi chú</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Phụ kiện</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/products?category=Accessories">Tất cả Phụ kiện</a></li>
                            <li><a class="dropdown-item" href="/products?category=Accessories1">Bút</a></li>
                            <li><a class="dropdown-item" href="/products?category=Accessories2">Kẹp giấy</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sticker</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/products?category=Sticker">Tất cả Sticker</a></li>
                            <li><a class="dropdown-item" href="/products?category=Sticker1">Sticker Trang trí</a></li>
                            <li><a class="dropdown-item" href="/products?category=Sticker2">Sticker ghi chú</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Collection</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/products?category=Collection">Tất cả Collection</a></li>
                            <li><a class="dropdown-item" href="/products?category=Collection1">Limited Edition</a></li>
                            <li><a class="dropdown-item" href="/products?category=Collection2">Seasonal Items</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    
    <!-- Main Section -->
    <div class="container-main">
        <!-- Article -->
        <article>
            <title>Sản Phẩm Nổi Bật</title>
            <div class="product-grid">
                @foreach($nhtsp as $nhtsp)
                    @if($nhtsp && isset($nhtsp->NHTHinhAnh))
                        <div class="product-card">
                            <img src="{{ asset($nhtsp->NHTHinhAnh) }}" alt="{{ $nhtsp->NHTTenSP }}" class="product-image">
                            <div class="info">
                                <h5>{{ $nhtsp->NHTTenSP }}</h5>
                                <p>{{ number_format($nhtsp->NHTDonGia, 0, ',', '.') }} VND</p>
                                <div class="btn-group">
                                    <a href="{{ route('NHTadmins.NHTHome.NHTShow', $nhtsp->id) }}" class="btn-btn-outline-primary">Xem</a>
                                    <a href="#" class="btn-btn-primary">Mua</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </article>

        <!-- Sidebar -->
        <aside>
            <h4>Danh Mục</h4>
            <div class="aside-banner">
                <img src="" alt="">
            </div>
            <h5>Sản Phẩm Khác</h5>
            <div class="aside-products">
                @foreach($nhtsp as $nhtsp)
                    @if($nhtsp && isset($nhtsp->NHTHinhAnh))
                        <div class="product-item">
                            <img src="{{ asset($nhtsp->NHTHinhAnh) }}" alt="{{ $nhtsp->NHTTenSP }}" class="product-image">
                            <div>
                                <p>{{ $nhtsp->NHTTenSP }}</p>
                                <small>{{ number_format($nhtsp->NHTDonGia, 0, ',', '.') }} VND</small>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </aside>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 CHUCHU STUDIO. All rights reserved.</p>
        <p>Phương thức thanh toán: Visa, MasterCard, MoMo</p>
        <a href="#">Liên Hệ</a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
