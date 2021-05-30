<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register </title>
    <link rel="stylesheet" href="{{ asset('css/loginSystem.css') }}">
    
</head>
    <body>
        @if (session('sucess'))
            <script>
                alert('Account Successfully Created');
            </script>
        @endif
        <div class="main-container">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <h2> Register </h2>
                <input type="number" name="student_number" placeholder="Student Number" value="{{ old('student_number') }}">
                @error('student_number')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror
                <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}">
                @error('name')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror
                <input type="text" name="course" placeholder="Course" value="{{ old('course') }}">
                @error('course')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror
                <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                @error('email')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="password_confirmation" placeholder="Confirm Password">
                @error('password')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror
                <button type="submit"> Register </button>
            </form>
            <div class="login-option">
                <a href="{{ route('login') }}"> LOGIN </a>
                <span> OR </span>
                <a href="{{ route('register') }}"> REGISTER </a>
            </div>
        </div>
    </body>
</html>