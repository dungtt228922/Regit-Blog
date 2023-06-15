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
    @vite(['resources/sass/signup.scss'])
    <title>Document</title>
</head>
<body>
<div class="sign-up-form-logo">
    <div>
        <img src="{{asset('storage/logo.png')}}">
    </div>
    <div>
        <img src="{{asset('storage/RT-Blogs.png')}}">
    </div>
</div>

<form method="post" class="sign-up-form">
    <div class="sign-in">
        <span>
            Sign Up
        </span>
    </div>

    <div class="sign-up-username">
        <div>
            <label>Username<span>*</span></label>
        </div>
        <div class="sign-up-username-input">
            <input type="text" id="email" name="email">
        </div>
    </div>
    <div class="sign-up-username">
        <div>
            <label for="email">Email<span>*</span></label>
        </div>
        <div class="sign-up-username-input">
            <input type="text" id="email" name="email">
        </div>
    </div>
    <div class="sign-up-password">
        <div>
            <label for="password">Password <span>*</span></label>
        </div>
        <div class="sign-up-password-input">
            <input type="text" id="password" name="password">
        </div>
    </div>
    <div class="sign-up-password">
        <div>
            <label for="password">Password confirm <span>*</span></label>
        </div>
        <div class="sign-up-password-input">
            <input type="text" id="password" name="password">
        </div>
    </div>

    <div class="sign-up-btn">
        <button type="submit" class="btn btn-primary">Sign up</button>
    </div>
    <div class="sign-up-link">
        <a href="https://www.google.com/">Already have account? sign-up</a>
    </div>
</form>
</body>
</html>
