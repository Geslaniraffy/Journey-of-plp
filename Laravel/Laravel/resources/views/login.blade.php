<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
    <link rel="stylesheet" href="{{ asset('css/loginSystem.css') }}">
</head>
    <body>
        <div class="pre-loader"></div>
        <video autoplay muted loop id="myVideo">
            <source src="<?php echo url('/'); ?>/images/video-bg.mp4" type="video/mp4">
        </video>
        @if (session('error'))
            <script>
                alert('Invalid Credentials');
            </script>
        @endif
        <div class="main-container">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <h2> Login to PLP </h2>
                <input type="text" name="email" placeholder="Email">
                @error('email')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror
                <input type="password" name="password" placeholder="Password">
                @error('password')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror
                <button type="submit"> Login </button>
            </form>
            <div class="login-option">
                <a href="{{ route('login') }}"> LOGIN </a>
                <span> OR </span>
                <a href="{{ route('register') }}"> REGISTER </a>
            </div>
        </div>
    </body>
</html>