<!-- resources/views/NHTadmins/NHTHome/NHTcontact.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ - NHT Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header class="my-4">
            <h1 class="text-center">Liên Hệ Với Chúng Tôi</h1>
        </header>
        
        <section>
            <p>Chúng tôi luôn sẵn sàng hỗ trợ bạn. Hãy để lại thông tin liên hệ và yêu cầu của bạn dưới đây:</p>
            <form action="#" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Tên của bạn</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email của bạn</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Tin nhắn của bạn</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Gửi Liên Hệ</button>
            </form>
        </section>

        <footer class="text-center mt-4">
            <a href="{{ route('NHTadmins.NHTHome.NHTindex') }}" class="btn btn-primary">Trở về Trang Chủ</a>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
