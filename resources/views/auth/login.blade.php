<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://source.unsplash.com/random/1920x1080');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0;
            padding: 0;
            height: 100vh;
        }

        .container {
            background: linear-gradient(to bottom right, #3b2424, #44ad5e);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(136, 53, 53, 0.1), 0 10px 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
            margin: 0 auto;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }

        .container h2 {
            margin-bottom: 20px;
            color: #ccb5b5;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: calc(100% - 40px);
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 25px;
            outline: none;
            transition: all 0.3s;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .form-group input[type="text"]:focus,
        .form-group input[type="password"]:focus {
            border-color: #007bff;
            box-shadow: 0 0 10px rgba(39, 172, 90, 0.3);
        }

        .form-group input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .form-group a {
            color: #031425;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
            font-size: 14px;
        }

        .form-group a:hover {
            text-decoration: underline;
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons a {
            display: inline-block;
            color: #ddc9cd;
            background-color: #f0f0f0;
            width: 40px;
            height: 40px;
           line-height: 40px;
            text-align: center;
            margin: 0 10px;
            border-radius: 50%;
            transition: background-color 0.3s;
        }

        .social-icons a:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <input type="text" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="password" id="password" name="password" placeholder="Password" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Login">
        </div>
    </form>
    <div>
        <a href="https://wa.me/6282225504383"><i class="fas fa-key"></i> Lupa password?</a>
    </div>
    <!-- Tambahkan tautan atau tombol untuk register di bawah -->
    <div>
        <a href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Register here</a>
    </div>
</div>

</body>
</html>