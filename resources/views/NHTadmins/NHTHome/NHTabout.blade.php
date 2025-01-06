<!-- resources/views/NHTadmins/NHTHome/NHTabout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới Thiệu - NHT Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header class="my-4">
            <h1 class="text-center">Giới Thiệu Về Chúng Tôi</h1>
        </header>
        
        <section>
            <p>Chúng tôi chuyên cung cấp các dịch vụ sáng tạo với đội ngũ chuyên gia tài năng. Chúng tôi cam kết mang đến những giải pháp tốt nhất cho khách hàng của mình.</p>
            <p>Với nhiều năm kinh nghiệm trong ngành, chúng tôi tự hào là đối tác tin cậy của các doanh nghiệp lớn và nhỏ.</p>
        </section>

        <footer class="text-center mt-4">
            <a href="{{ route('NHTadmins.NHTHome.NHTindex') }}" class="btn btn-primary">Trở về Trang Chủ</a>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
