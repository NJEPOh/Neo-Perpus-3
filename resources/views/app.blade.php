@extends('layouts.admin')

@section('content')
    <div class="container-page">

        <h2 class="page-title">Data Buku</h2>

        <a href="{{ route('buku.create') }}" class="btn-add">+ Tambah Buku</a>

        <div class="table-wrapper">
            <table class="modern-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Kategori</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($buku as $item)
                        <tr>
                            <td>{{ $item->id_buku }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->penulis }}</td>
                            <td>{{ $item->kategori }}</td>
                            <td>{{ $item->stok }}</td>
                            <td>
                                <a href="{{ route('buku.edit', $item->id_buku) }}">Edit</a>

                                <form action="{{ route('buku.destroy', $item->id_buku) }}" method="POST"
                                    style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

    {{-- ================= CSS ================= --}}
    <style>
        /* === GLOBAL === */
        body {
            font-family: 'Inter', Arial, sans-serif;
            background: #f8f9fb;
            margin: 0;
            padding: 0;
            color: #1b1b1b;
        }

        .container-page {
            padding: 30px;
        }

        /* === TITLE === */
        .page-title {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 22px;
        }

        /* === BUTTON TAMBAH === */
        .btn-add {
            display: inline-block;
            padding: 10px 18px;
            background: #111;
            color: #fff;
            border-radius: 10px;
            font-size: 14px;
            text-decoration: none;
            transition: 0.2s ease;
        }

        .btn-add:hover {
            background: #333;
        }

        /* === TABLE MODERN FLOATING === */
        .table-wrapper {
            margin-top: 25px;
        }

        table.modern-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 12px;
        }

        table.modern-table thead th {
            text-align: left;
            padding: 10px 16px;
            font-size: 13px;
            color: #555;
            font-weight: 600;
        }

        /* Card baris */
        table.modern-table tbody tr {
            background: #ffffff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
            border-radius: 14px;
            overflow: hidden;
            transition: 0.2s ease;
        }

        table.modern-table tbody tr:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 22px rgba(0, 0, 0, 0.08);
        }

        table.modern-table tbody td {
            padding: 14px 16px;
            font-size: 14px;
        }

        /* === LINK & ACTION === */
        table.modern-table tbody td a {
            color: #0071ff;
            font-weight: 500;
            text-decoration: none;
            margin-right: 10px;
        }

        table.modern-table tbody td a:hover {
            text-decoration: underline;
        }

        table.modern-table tbody td form button {
            border: none;
            background: transparent;
            color: #ff4444;
            cursor: pointer;
            font-weight: 500;
        }

        table.modern-table tbody td form button:hover {
            text-decoration: underline;
        }
    </style>
@endsection
