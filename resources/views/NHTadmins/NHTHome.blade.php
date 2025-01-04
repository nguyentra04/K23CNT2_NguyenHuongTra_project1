@extends('layouts.admins.NHT_master')
@section('title','Home ')
@section('content-body')
    <div class="content-wrapper">
        <section class="container">
            <section class="row">
                <section class="col-md-12">
                    <header class="d-flex align-items-center justify-content-between p-3 bg-light border-bottom"><!-- Logo -->
                        <div class="logo d-flex align-items-center">
                            <img src="/images/logo.png" alt="Logo" class="me-2" style="width: 50px; height: auto;">
                            <h2 class="m-0">CHUCHU STUDIO</h2>
                        </div>
                        <!-- Navigation -->
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                                <div class="container-fluid">
                                <a class="navbar-brand" href="#"></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Home</a>
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
                                    <a href="/services" class="btn btn-primary">Explore Our Services</a>
                                </section>
                            </section>
                        </section>
                    </main>
                    
                    <footer class="footer bg-dark text-white py-3">
                        <div class="container text-center">
                            <p>&copy; 2024 CHUCHU STUDIO. All rights reserved.</p>
                            <p><a href="/terms" class="text-white">Terms of Use</a> | <a href="/privacy" class="text-white">Privacy Policy</a></p>
                        </div>
                    </footer>
                
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
                </section>
            </section>
        </section>
    </div>
@endsection
<style>/* General Styles */
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
    }
    
    .header-container {
        background-color: #f5f5f5;
        padding: 20px 0;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .logo {
        height: 100px;
    }
    
    .brand-name {
        font-size: 36px;
        font-weight: bold;
        margin-top: 10px;
        color: #333;
    }
    
    .navbar-nav .nav-link {
        font-size: 18px;
        margin: 0 10px;
        color: #333;
        transition: color 0.3s ease;
    }
    
    .navbar-nav .nav-link:hover {
        color: #007bff;
    }
    
    .main-content {
        text-align: center;
        background-color: #fff;
        padding: 50px 20px;
        border-radius: 10px;
        box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.1);
    }
    
    .main-content h2 {
        font-size: 28px;
        color: #333;
        margin-bottom: 20px;
    }
    
    .main-content p {
        font-size: 16px;
        color: #555;
        margin-bottom: 30px;
    }
    
    .footer {
        background-color: #222;
        color: #fff;
        text-align: center;
        padding: 15px 0;
    }
    
    .footer a {
        text-decoration: none;
        color: #007bff;
        transition: color 0.3s ease;
    }
    
    .footer a:hover {
        color: #0056b3;
    }
    
</style>
