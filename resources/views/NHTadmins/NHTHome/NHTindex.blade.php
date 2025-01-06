<!-- resources/views/NHTadmins/NHTHome/NHTindex.blade.php -->

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
            padding: 0;
        }

        .header-container {
            background-color: #f5f5f5;
            padding: 20px 0;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .logo {
            height: 50px;
        }

        .navbar-nav .nav-link {
            font-size: 18px;
            margin: 0 10px;
            color: #333;
        }

        .nhtsp-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .nhtsp-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .nhtsp-card:hover {
            transform: translateY(-10px);
        }

        .nhtsp-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .nhtsp-info {
            padding: 15px;
        }

        .nhtsp-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .nhtsp-price {
            font-size: 16px;
            color: #FF8C94; /* Màu hồng pastel */
            margin: 10px 0;
        }

        .nhtsp-buttons {
            display: flex;
            justify-content: space-between;
        }

        .btn {
            padding: 8px 15px;
            border-radius: 5px;
            font-size: 14px;
        }

        .btn-buy {
            background-color: #FF8C94;
            color: white;
        }

        .btn-view {
            background-color: #F0F0F0;
            color: #333;
        }

        .footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 15px 0;
        }

        .footer a {
            color: #FF8C94;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <div class="header-container">
        <div class="container d-flex justify-content-between">
            <div class="logo">
                <img src="/images/logo.png" alt="Logo" class="img-fluid">
            </div>
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/nht-admins">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/nht-admins/services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="/nht-admins/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/nht-admins/contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Product Grid -->
    <section class="nhtsp-grid">
        @foreach($nhtsp as $nhtsp)
            <div class="nhtsp-card">
                <img src="{{ Storage::url($nhtsp->NHTHinhAnh) }}" alt="{{ $nhtsp->NHTTenSP }}" class="nhtsp-img">
                <div class="nhtsp-info">
                    <h3 class="nhtsp-title">{{ $nhtsp->NHTTenSP }}</h3>
                    <p class="nhtsp-price">{{ number_format($nhtsp->NHTDonGia, 0, ',', '.') }} VND</p>
                    <div class="nhtsp-buttons">
                        <a href="{{ route('NHTadmins.NHTHome.NHTShow', $nhtsp->NHTMaSP) }}" class="btn btn-view">View</a>
                        <a href="#" class="btn btn-buy">Buy</a>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 CHUCHU STUDIO. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
