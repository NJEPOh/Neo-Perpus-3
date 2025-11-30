@extends('layouts.admin')

@section('content')
    <div class="container-page">

        <h2 class="page-title">Data Buku</h2>

        <a href="{{ route('buku.create') }}" class="btn-add">+ Tambah Buku</a>

        <table class="modern-table" cellpadding="8" cellspacing="0">
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
                            <a href="{{ route('buku.edit', $item->id_buku) }}" class="link-edit">Edit</a>
                            <form action="{{ route('buku.destroy', $item->id_buku) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    {{-- ================= CSS LANGSUNG DI FILE BLADE ================= --}}
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #f5f6fa;
            margin: 0;
            padding: 0;
        }

        .container-page {
            padding: 28px;
        }

        .page-title {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 18px;
        }

        /* Tombol tambah */
        .btn-add {
            display: inline-block;
            padding: 10px 16px;
            background: #111;
            color: white;
            border-radius: 10px;
            text-decoration: none;
            font-size: 14px;
            transition: 0.2s;
            margin-bottom: 16px;
        }

        .btn-add:hover {
            background: #333;
        }

        /* Table styling */
        table.modern-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 12px;
        }

        table.modern-table thead th {
            text-align: left;
            padding: 10px 14px;
            font-size: 13px;
            color: #666;
            font-weight: 600;
        }

        table.modern-table tbody tr {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.07);
            transition: 0.2s;
        }

        table.modern-table tbody tr:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.10);
        }

        table.modern-table tbody td {
            padding: 14px 16px;
            font-size: 14px;
        }

        /* Link & tombol aksi */
        .link-edit {
            color: #0071ff;
            margin-right: 10px;
            text-decoration: none;
            font-weight: 500;
        }

        .link-edit:hover {
            text-decoration: underline;
        }

        .btn-delete {
            background: transparent;
            border: none;
            color: #ff4b4b;
            cursor: pointer;
            font-weight: 500;
        }

        .btn-delete:hover {
            text-decoration: underline;
        }
    </style>
@endsection
