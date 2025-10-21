<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NeoPerpus</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header style="background:#eee;padding:10px;">
        <h2>NeoPerpus</h2>
        <nav>
            <a href="{{ url('/') }}">Beranda</a> |
            <a href="{{ url('/katalog') }}">Katalog</a> |
            @if (session('role') == 'anggota')
                <span>Halo, {{ session('nama') }}</span> |
                <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @else
                <a href="{{ url('/login') }}">Login</a>
            @endif
        </nav>
    </header>

    <main style="padding:20px;">
        @yield('content')
    </main>

    <footer style="text-align:center;padding:10px;background:#eee;">
        <small>© {{ date('Y') }} NeoPerpus</small>
    </footer>
</body>

</html>
