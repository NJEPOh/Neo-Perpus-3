<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NeoPerpus</title>

    <style>
        /* ===========================
           GLOBAL STYLE
        ============================ */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f8f8f8;
            color: #333;
        }

        /* ===========================
           HEADER + NAVBAR
        ============================ */
        header {
            background: #ffffff;
            padding: 15px 25px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h2 {
            margin: 0;
            font-size: 22px;
            font-weight: bold;
            color: #333;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        /* Tombol menu Beranda / Katalog */
        nav a {
            padding: 8px 15px;
            background: #f0f0f0;
            border-radius: 6px;
            color: #333;
            font-weight: 600;
            transition: 0.25s;
        }

        nav a:hover {
            background: #007bff;
            color: white;
        }

        /* Nama user */
        nav span {
            font-weight: bold;
            padding: 8px 15px;
            background: #e8e8e8;
            border-radius: 6px;
        }

        /* Tombol logout */
        nav form button {
            background: #d9534f;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            transition: 0.25s;
        }

        nav form button:hover {
            background: #c9302c;
        }

        /* ===========================
           MAIN CONTENT
        ============================ */
        main {
            padding: 20px;
            min-height: 70vh;
        }

        /* ===========================
           FOOTER
        ============================ */
        footer {
            text-align: center;
            padding: 10px;
            background: #eee;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <header>
        <h2>NeoPerpus</h2>

        <nav>
            <a href="{{ url('/') }}">Beranda</a>
            <a href="{{ url('/katalog') }}">Katalog</a>

            @if (session('role') == 'anggota')
                <span>{{ session('nama') }}</span>

                <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @else
                <a href="{{ url('/login') }}">Login</a>
            @endif
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <small>© {{ date('Y') }} NeoPerpus</small>
    </footer>

</body>

</html>
