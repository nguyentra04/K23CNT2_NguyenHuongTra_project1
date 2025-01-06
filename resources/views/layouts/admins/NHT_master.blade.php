<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>@yield('title')</title>
    <style>
       /* Reset */
body, html {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

/* Header */
.header {
    background-color: #f2f2f2;;
    padding: 15px 20px;
    z-index: 10;
    position: relative;
}

/* Footer */
.footer {
    background-color: #ffffff;
    text-align: center;
}

/* Main Container */
.main-container {
    display: flex;
    flex: 1; 
    overflow: hidden; /* Ẩn overflow */
}

/* Sidebar */
.sidebar {
    width: 250px; 
    background-color: #f2f2f2;
    color: white;
    overflow-y: auto; 
    padding: 20px;
    display: flex;
    flex-direction: column;
}
.sidebar a {
    color: #333;
    display: block;
    text-decoration: none;
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

/* Content Body */
.content-body {
    flex: 1; /* Chiếm toàn bộ không gian còn lại */
    background-color: #f2f2f2;;
    padding: 20px;
    overflow-y: auto;
}

@media (max-width: 768px) {
    .sidebar {
        width: 100px; 
    }
    .content-body {
        padding: 10px;
    }
}


    </style>
</head>
<body>
    <section class="container-fluid d-flex flex-column vh-100">
        <header class="header">
            @include('layouts.admins.NHT_header')
        </header>
        <div class="main-container d-flex flex-grow-1">
            <nav class="sidebar">
                @include('layouts.admins.NHT_menu')
            </nav>
            <section class="content-body">
                <div class="content">
                    @yield('content-body')
                </div>
            </section>
        </div>
        <footer class="footer">
            @include('layouts.admins.NHT_footer')
        </footer>
    </section>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js&quot; integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js&quot; integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </section>
    
</body>
</html>