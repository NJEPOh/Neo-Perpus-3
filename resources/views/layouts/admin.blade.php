<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel - NeoPerpus</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header style="background:#444;color:black;padding:10px;">
        <h2>Admin Panel</h2>
        <nav>
            <a href="{{ url('/admin') }}" style="color:white;">Dashboard</a> |
            <a href="{{ route('buku.index') }}" style="color:white;">Buku</a> |
            <a href="{{ route('anggota.index') }}" style="color:white;">Anggota</a> |
            <a href="{{ route('peminjaman.index') }}" style="color:white;">Peminjaman</a> |
            <a href="{{ route('denda.index') }}" style="color:white;">Denda</a> |
            <form action="{{ url('/logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </nav>
    </header>

    <main style="padding:20px;">
        @yield('content')
    </main>
</body>

</html>
