<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aplikasi PLTA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: 500px;
            width: 200%;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            border-radius: 8px;
        }
        .login-container .form-control {
            border-radius: 0.375rem;
        }
        .login-container .btn {
            border-radius: 0.375rem;
        }
    </style>
</head>
<body>
    <div class="login-container bg-dark">
        <h2 class="text-center text-light">Login</h2>

        <form method="POST" action="{{route('login')}}">
            @csrf
            <div class="form-group ">
                <label for="email" class="text-light">Email</label>
                <input type="email" class="form-control" id="email" name="email" required autofocus>
            </div>
            <div class="form-group">
                <label for="password" class="text-light">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block text-light">Login</button>
            <div class="text-center mt-3">
                <a href="">Lupa Password?</a> <br>
            </div>
            </form>

            <div class="text-center mt-3">
                <a href="{{route ('regis')}}">Buat Akun</a>
            </div>
            
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>