<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel - NeoPerpus</title>

    <style>
        /* ====== GLOBAL STYLE ====== */
        body {
            font-family: 'Inter', sans-serif;
            background: #f3f4f6;
            margin: 0;
            padding: 0;
            color: #222;
        }

        a {
            text-decoration: none;
        }

        /* ====== HEADER ====== */
        header {
            background: #1f2937;
            color: white;
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
            gap: 6px;
            border-bottom: 4px solid #4c6ef5;
        }

        header h2 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
        }

        nav {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
            align-items: center;
            font-size: 15px;
        }

        nav a {
            color: white;
            font-weight: 500;
            padding: 6px 10px;
            border-radius: 8px;
            transition: 0.2s;
        }

        nav a:hover {
            background: rgba(255, 255, 255, 0.18);
        }

        nav form button {
            background: #ef4444;
            border: none;
            color: white;
            padding: 6px 12px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.2s;
            font-weight: 600;
        }

        nav form button:hover {
            background: #dc2626;
        }

        /* ====== MAIN CONTENT ====== */
        main {
            padding: 30px;
        }

        /* Card container for admin pages */
        .admin-card {
            background: white;
            padding: 25px;
            border-radius: 18px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
            margin-bottom: 25px;
        }
    </style>
</head>

<body>

    <header>
        <h2>Admin Panel</h2>

        <nav>
            <a href="{{ url('/admin') }}">Dashboard</a>
            <a href="{{ route('buku.index') }}">Buku</a>
            <a href="{{ route('anggota.index') }}">Anggota</a>
            <a href="{{ route('peminjaman.index') }}">Peminjaman</a>
            <a href="{{ route('denda.index') }}">Denda</a>

            <form action="{{ url('/logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </nav>
    </header>

    <main>
        <div class="admin-card">
            @yield('content')
        </div>
    </main>

</body>

</html>
