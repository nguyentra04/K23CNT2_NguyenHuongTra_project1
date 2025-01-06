<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang Chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="content-wrapper">
        <section class="container">
            <section class="row">
                <section class="col-md-12">
                    <header class="d-flex align-items-center justify-content-between p-3 bg-light border-bottom">
                        <!-- Logo -->
                        <div class="logo d-flex align-items-center">
                            <img src="/images/logo.png" alt="Logo" class="me-2" style="width: 50px; height: auto;">
                            <h2 class="m-0">CHUCHU STUDIO</h2>
                        </div>
                        <!-- Navigation -->
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="{{ route('NHTHome') }}"></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('services') }}">Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Link</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropdown
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                        </li>
                                    </ul>
                                    <form class="d-flex" role="search">
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </header>
                    
                    <main class="main-content py-5">
                        <section class="container">
                            <section class="row">
                                <section class="col-md-12 text-center">
                                    <h2>Welcome to CHUCHU STUDIO</h2>
                                    <p>Your one-stop solution for creative projects and media production.</p>
                                    <a href="{{ route('services') }}" class="btn btn-primary">Explore Our Services</a>
                                </section>
                            </section>
                        </section>
                    </main>
                    
                    <footer class="footer bg-dark text-white py-3">
                        <div class="container text-center">
                            <p>&copy; 2024 CHUCHU STUDIO. All rights reserved.</p>
                            <p><a href="{{ route('terms') }}" class="text-white">Terms of Use</a> | <a href="{{ route('privacy') }}" class="text-white">Privacy Policy</a></p>
                        </div>
                    </footer>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
                </section>
            </section>
        </section>
    </div>
</body>
</html>
