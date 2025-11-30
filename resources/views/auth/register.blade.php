@extends('layouts.main')

@section('content')

    <style>
        /* === REGISTER PAGE === */
        .register-container {
            width: 380px;
            margin: 80px auto;
            background: white;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        }

        .register-title {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 20px;
            text-align: center;
        }

        .register-container label {
            font-size: 14px;
            font-weight: 600;
            color: #444;
        }

        .register-container input {
            width: 100%;
            padding: 12px 14px;
            margin-top: 6px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-size: 14px;
            outline: none;
            transition: border 0.2s ease, box-shadow 0.2s ease;
        }

        .register-container input:focus {
            border-color: #0071ff;
            box-shadow: 0 0 0 3px rgba(0, 113, 255, 0.15);
        }

        .register-btn {
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

        .register-btn:hover {
            background: #333;
        }

        .register-error {
            color: #ff4444;
            text-align: center;
            font-weight: 500;
            margin-bottom: 12px;
        }

        .register-bottom {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .register-bottom a {
            color: #0071ff;
            text-decoration: none;
        }

        .register-bottom a:hover {
            text-decoration: underline;
        }
    </style>

    <div class="register-container">

        <h3 class="register-title">Registrasi Anggota</h3>

        @if ($errors->any())
            <div class="register-error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ url('/register') }}" method="POST">
            @csrf

            <label>Nama:</label>
            <input type="text" name="nama" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <button type="submit" class="register-btn">Daftar</button>
        </form>

        <p class="register-bottom">
            Sudah punya akun? <a href="{{ url('/login') }}">Login di sini</a>
        </p>

    </div>

@endsection
