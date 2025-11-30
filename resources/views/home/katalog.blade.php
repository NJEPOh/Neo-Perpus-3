@extends('layouts.main')

@section('content')
    <div class="catalog-container">

        <h3 class="catalog-title">Katalog Buku</h3>

        <div class="table-wrapper">
            <table class="modern-table">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Kategori</th>
                        <th>Stok</th>
                        <th>Detail</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($buku as $item)
                        <tr>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->penulis }}</td>
                            <td>{{ $item->kategori }}</td>
                            <td>{{ $item->stok }}</td>
                            <td>
                                <a href="{{ url('buku/' . $item->id_buku) }}" class="detail-link">Lihat</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

    {{-- ========== CSS Modern ========== --}}
    <style>
        body {
            font-family: "Inter", sans-serif;
            background: #fafafa;
            margin: 0;
            padding: 0;
            color: #1b1b1b;
        }

        .catalog-container {
            padding: 38px 28px;
            max-width: 900px;
            margin: 0 auto;
        }

        .catalog-title {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 22px;
        }

        /* === Table Wrapper === */
        .table-wrapper {
            margin-top: 15px;
        }

        table.modern-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 12px;
        }

        table.modern-table thead th {
            text-align: left;
            padding: 12px 16px;
            font-size: 13px;
            color: #666;
            font-weight: 600;
        }

        /* === Card-style row === */
        table.modern-table tbody tr {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
            transition: 0.25s ease;
        }

        table.modern-table tbody tr:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }

        table.modern-table tbody td {
            padding: 14px 16px;
            font-size: 14px;
        }

        /* === Detail Link === */
        .detail-link {
            color: #0071ff;
            font-weight: 500;
            text-decoration: none;
        }

        .detail-link:hover {
            text-decoration: underline;
        }
    </style>
@endsection
