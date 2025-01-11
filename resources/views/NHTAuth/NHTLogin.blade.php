<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập cho Admin </title>
    <style>
        body{
        margin: 50px;
        padding: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: white;
    }
    .loginform{
        width:  400px;
        padding: 40px;
        background-color: white;
        color:aliceblue;
        border: none;
        box-shadow: inset 5px 5px 15px rgba(0,0,0, 0.1);
        backdrop-filter: blur(10px);
        text-align: center;
        border-radius: 25px;
    }
    .loginform h1{
        padding: 12x;
        color: black;
        font-size: 50px;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-align: center;
        font-weight: bold;
        text-shadow: 1px 1px 0px rgba(0,0,0, 0.1);
        
    }
    .loginform input {
        width: 90%;
        padding: 20px;
        margin-bottom: 20px;
        font-size: 16px;
        border-radius: 20px;
        border: none;
        box-shadow: inset 5px 5px 15px rgba(0,0,0, 0.1);
        outline: none;
        color: black;
    }
    .loginform a{
        text-decoration: none;
        color: #FFB6C1;
        padding: 10px;
    }
    .loginform button{
        width: 100%;
        padding: 15px;
        padding-bottom: 15px;
        border: none;
        border-radius: 20px;
        background-color: whitesmoke;
        position: relative;
        color: black;
        box-shadow: inset 5px 5px 15px rgba(0,0,0, 0.1);
        text-align: center;
        font-weight: bold;
        font-size: 16px;
        cursor: pointer;
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
            background-color:#4f6d7a; /* Màu hồng đậm hơn khi hover */
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
    <div class="loginform">
        <h1>Welcome</h1>
        <form action="{{ route('NHTLogin') }}" method="POST">
            @csrf
                <input type="text" name="username" placeholder="username" required><br>
                <input type="password" name="password" placeholder="password" required><br>
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
