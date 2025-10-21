@extends('layouts.main')
@section('content')
    <h3>Login</h3>

    @if (session('error'))
        <p style="color:red;">{{ session('error') }}</p>
    @endif

    <form action="{{ url('/login') }}" method="POST">
        @csrf
        <label>Username atau Email:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>

    <p>Belum punya akun? <a href="{{ url('/register') }}">Daftar di sini</a></p>
@endsection
