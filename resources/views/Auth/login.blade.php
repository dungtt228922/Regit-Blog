<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap">
    @vite(['resources/sass/login.scss'])
    <title>Document</title>
</head>
<body>
<div class="login-form-logo">
    <div>
        <img src="{{asset('storage/logo.png')}}">
    </div>
    <div>
        <img src="{{asset('storage/RT-Blogs.png')}}">
    </div>
</div>

<form method="post" class="login-form">
    <div class="sign-in">
        <span>
            Sign In
        </span>
    </div>

    <div class="login-username">
        <div>
            <label for="email">Username or email<span>*</span></label>
        </div>
        <div class="login-username-input">
            <input type="text" id="email" name="email">
        </div>
    </div>
    <div class="login-password">
        <div>
            <label for="password">Password <span>*</span></label>
        </div>
        <div class="login-password-input">
            <input type="text" id="password" name="password">
        </div>
    </div>
    <div class="remember">
        <div>
            <input type="checkbox" class="remember-password">
            <span>Remember password</span>
        </div>
        <div>
            <a href="#">Forgot password?</a>
        </div>
    </div>

    <div class="login-btn">
        <button type="submit" class="btn btn-primary">Login</button>
    </div>
    <div class="sign-up-link">
        <a href="https://www.google.com/">Don't have any account? Sign up here</a>
    </div>
</form>
</body>
</html>
