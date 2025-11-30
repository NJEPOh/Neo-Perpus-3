@extends('layouts.main')

@section('content')
    <style>
        /* === LOGIN PAGE === */
        .login-container {
            width: 360px;
            margin: 80px auto;
            background: white;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        }

        .login-title {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 20px;
            text-align: center;
        }

        .login-container label {
            font-size: 14px;
            font-weight: 600;
            color: #444;
        }

        .login-container input {
            width: 100%;
            padding: 12px 14px;
            margin-top: 6px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-size: 14px;
            outline: none;
            transition: border 0.2s ease, box-shadow 0.2s ease;
        }

        .login-container input:focus {
            border-color: #0071ff;
            box-shadow: 0 0 0 3px rgba(0, 113, 255, 0.15);
        }

        /* tombol login */
        .login-btn {
            width: 100%;
            padding: 12px;
            background: #111;
            color: white;
            border: none;
            border-radius: 10px;
            margin-top: 15px;
            font-size: 14px;
            cursor: pointer;
            transition: 0.2s ease;
        }

        .login-btn:hover {
            background: #333;
        }

        /* pesan error */
        .login-error {
            color: #ff4444;
            text-align: center;
            font-weight: 500;
            margin-bottom: 12px;
        }

        /* link daftar */
        .login-bottom {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .login-bottom a {
            color: #0071ff;
            text-decoration: none;
        }

        .login-bottom a:hover {
            text-decoration: underline;
        }
    </style>

    <div class="login-container">

        <h3 class="login-title">Login</h3>

        @if (session('error'))
            <p class="login-error">{{ session('error') }}</p>
        @endif

        <form action="{{ url('/login') }}" method="POST">
            @csrf

            <label>Email:</label>
            <input type="text" name="username" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <button type="submit" class="login-btn">Login</button>
        </form>

        <p class="login-bottom">
            Belum punya akun? <a href="{{ url('/register') }}">Daftar di sini</a>
        </p>

    </div>
@endsection
