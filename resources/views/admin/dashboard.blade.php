@extends('layouts.admin')

@section('content')
    <style>
        /* ============================
           DASHBOARD CARD STYLE
        ============================ */

        .dashboard-container {
            max-width: 600px;
            padding: 20px;
            margin: auto;
        }

        h3 {
            text-align: center;
            font-size: 26px;
            margin-bottom: 20px;
            color: #333;
        }

        .stats-box {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
            list-style: none;
        }

        .stats-box li {
            background: #f5f5f5;
            margin-bottom: 12px;
            padding: 12px 15px;
            border-radius: 8px;
            font-size: 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: 0.2s;
        }

        .stats-box li:hover {
            background: #e3eaff;
            transform: translateX(3px);
        }

        .stats-box li span.value {
            font-weight: bold;
            color: #2a4bd7;
        }
    </style>

    <div class="dashboard-container">

        <h3>Dashboard Admin</h3>

        <ul class="stats-box">
            <li>
                Total Buku
                <span class="value">{{ $totalBuku }}</span>
            </li>

            <li>
                Total Anggota
                <span class="value">{{ $totalAnggota }}</span>
            </li>

            <li>
                Total Peminjaman
                <span class="value">{{ $totalPinjam }}</span>
            </li>

            <li>
                Total Denda
                <span class="value">{{ $totalDenda }}</span>
            </li>
        </ul>

    </div>
@endsection
