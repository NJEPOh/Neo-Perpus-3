@extends('layouts.admin')
@section('content')
    <style>
        /* ============================
           STYLE: DATA BUKU TABLE
        ============================ */

        h3 {
            font-size: 26px;
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .add-btn {
            display: inline-block;
            background: #2a4bd7;
            color: #fff !important;
            padding: 10px 15px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            margin-bottom: 20px;
            transition: 0.2s;
        }

        .add-btn:hover {
            background: #1d3abf;
            transform: translateY(-2px);
        }

        .table-box {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 15px;
        }

        thead {
            background: #e3eaff;
        }

        th,
        td {
            padding: 12px 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            font-weight: bold;
            color: #2a4bd7;
        }

        tr:hover {
            background: #f1f5ff;
            transition: 0.2s;
        }

        /* Tombol edit & hapus */
        .btn-edit {
            color: #1d6df7;
            font-weight: bold;
            text-decoration: none;
            transition: 0.2s;
        }

        .btn-edit:hover {
            color: #0a3bb8;
        }

        .btn-hapus {
            background: none;
            color: #d72638;
            border: none;
            cursor: pointer;
            font-weight: bold;
            transition: 0.2s;
        }

        .btn-hapus:hover {
            color: #9b0e21;
        }

        /* Success message */
        .success-msg {
            background: #d6ffe2;
            padding: 10px 12px;
            border-left: 5px solid #38b768;
            border-radius: 6px;
            margin-bottom: 15px;
            color: #256b40;
            font-size: 14px;
        }
    </style>

    <h3>Data Buku</h3>

    <a href="{{ route('buku.create') }}" class="add-btn">+ Tambah Buku</a>

    @if (session('success'))
        <p class="success-msg">{{ session('success') }}</p>
    @endif

    <div class="table-box">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Kategori</th>
                    <th>Tahun</th>
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
                        <td>{{ $item->penerbit }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>{{ $item->tahun_terbit }}</td>
                        <td>{{ $item->stok }}</td>
                        <td>
                            <a href="{{ route('buku.edit', $item->id_buku) }}" class="btn-edit">Edit</a> |
                            <form action="{{ route('buku.destroy', $item->id_buku) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-hapus">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
