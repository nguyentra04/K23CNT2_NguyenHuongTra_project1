<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập cho Admin </title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #F9F9F9; /* Màu nền sáng nhẹ */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }

        .login-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Làm mờ bóng đổ */
            width: 350px;
            text-align: center;
            border: 1px solid #ddd; /* Thêm border mỏng */
        }

        h1 {
            margin-bottom: 25px;
            color: #FFB6C1; /* Tông hồng pastel */
            font-size: 24px;
            font-weight: 600;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #666;
            text-align: left;
            font-weight: 500;
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            background-color: #f4f4f4;
            transition: border-color 0.3s ease; 
        }

        input[type="email"]:focus, input[type="password"]:focus {
            border-color: #FFB6C1; 
            outline: none;
        }

        button {
            background-color: #FFB6C1; 
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s ease; 
        }

        button:hover {
            background-color: #FF8DAA; /* Màu hồng đậm hơn khi hover */
        }

        .error-list {
            color: #FF6347; /* Màu đỏ cam cho thông báo lỗi */
            margin-top: 15px;
        }

        .error-list ul {
            list-style-type: none;
            padding: 0;
        }

        .error-list li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Đăng nhập Admin</h1>
        <form action="{{ route('NHTLogin') }}" method="POST">
            @csrf
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Login</button>
        </form>

        @if ($errors->any())
            <div class="error-list">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</body>
</html>
