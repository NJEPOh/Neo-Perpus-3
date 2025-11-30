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
            margin-top: 10px;
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

        .action-btn {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .action-btn a {
            color: #2563eb !important;
            text-decoration: none;
            font-weight: 600;
            transition: 0.2s;
        }

        .action-btn a:hover {
            text-decoration: underline;
        }

        .action-btn form {
            margin: 0;
            display: inline-block;
        }

        .action-btn form button {
            background: #dc2626;
            color: white;
            border: none;
            padding: 6px 10px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 13px;
            font-weight: 600;
            transition: 0.2s;
        }

        .action-btn form button:hover {
            background: #b91c1c;
        }
    </style>

    <div class="table-container">
        <h3>Data Denda</h3>

        <a class="add-btn" href="{{ route('denda.create') }}">+ Tambah Denda</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID Peminjaman</th>
                    <th>Jumlah Denda</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($denda as $item)
                    <tr>
                        <td>{{ $item->id_denda }}</td>
                        <td>{{ $item->id_peminjaman }}</td>
                        <td>Rp {{ number_format($item->jumlah_denda, 0, ',', '.') }}</td>
                        <td>{{ $item->keterangan }}</td>

                        <td class="action-btn">
                            <a href="{{ route('denda.edit', $item->id_denda) }}">Edit</a>

                            <form action="{{ route('denda.destroy', $item->id_denda) }}" method="POST">
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
@endsection
