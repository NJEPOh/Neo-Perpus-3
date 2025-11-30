@extends('layouts.admin')

@section('content')
    <style>
        .table-container {
            background: #ffffff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            font-family: Arial, sans-serif;
            margin-top: 20px;
        }

        .table-container h3 {
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
            font-weight: bold;
        }

        .add-btn {
            display: inline-block;
            margin-bottom: 15px;
            background: #4f46e5;
            color: white;
            padding: 10px 14px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            transition: 0.2s;
            font-weight: 600;
        }

        .add-btn:hover {
            background: #3730a3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 15px;
        }

        thead tr {
            background: #f3f4f6;
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        tr:hover {
            background: #f9fafb;
        }

        /* Tombol Edit & Hapus */
        .action-btn {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .action-btn a.edit {
            color: #2563eb;
            font-weight: 600;
            text-decoration: none;
        }

        .action-btn a.edit:hover {
            text-decoration: underline;
        }

        .action-btn button.delete {
            background: #dc2626;
            color: white;
            border: none;
            padding: 7px 12px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 13px;
            font-weight: 600;
        }

        .action-btn button.delete:hover {
            background: #b91c1c;
        }
    </style>

    <div class="table-container">
        <h3>Data Peminjaman</h3>

        <a class="add-btn" href="{{ route('peminjaman.create') }}">+ Tambah Peminjaman</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Anggota</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($peminjaman as $item)
                    <tr>
                        <td>{{ $item->id_peminjaman }}</td>
                        <td>{{ $item->anggota->nama }}</td>
                        <td>{{ $item->buku->judul }}</td>
                        <td>{{ $item->tanggal_pinjam }}</td>
                        <td>{{ $item->tanggal_kembali }}</td>
                        <td>{{ $item->status }}</td>

                        <td>
                            <div class="action-btn">
                                <a href="{{ route('peminjaman.edit', $item->id_peminjaman) }}" class="edit">Edit</a>

                                <form action="{{ route('peminjaman.destroy', $item->id_peminjaman) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
