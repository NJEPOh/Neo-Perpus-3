@extends('layouts.admin')

@section('content')
    <style>
        /* === STYLE TABLE HALAMAN ADMIN === */

        .anggota-container {
            width: 90%;
            margin: 30px auto;
            background: white;
            padding: 25px;
            border-radius: 14px;
            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.08);
        }

        .anggota-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 15px;
            color: #222;
        }

        .add-btn {
            display: inline-block;
            padding: 10px 16px;
            background: #111;
            color: white;
            border-radius: 8px;
            margin-bottom: 18px;
            text-decoration: none;
            transition: 0.2s ease;
            font-size: 14px;
        }

        .add-btn:hover {
            background: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            border-radius: 10px;
            overflow: hidden;
            font-size: 14px;
        }

        table thead {
            background: #111;
            color: white;
        }

        table th,
        table td {
            padding: 12px 14px;
            border-bottom: 1px solid #eee;
            text-align: left;
        }

        table tr:hover {
            background: #f7f7f7;
        }

        /* Tombol aksi */
        .action-link {
            color: #0071ff;
            text-decoration: none;
            font-weight: 600;
        }

        .action-link:hover {
            text-decoration: underline;
        }

        .delete-btn {
            background: none;
            border: none;
            color: red;
            font-weight: 600;
            cursor: pointer;
        }

        .delete-btn:hover {
            text-decoration: underline;
        }
    </style>

    <div class="anggota-container">

        <h3 class="anggota-title">Data Anggota</h3>

        <a href="{{ route('anggota.create') }}" class="add-btn">+ Tambah Anggota</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tanggal Daftar</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($anggota as $item)
                    <tr>
                        <td>{{ $item->id_anggota }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->tanggal_daftar }}</td>
                        <td>
                            <a href="{{ route('anggota.edit', $item->id_anggota) }}" class="action-link">Edit</a> |

                            <form action="{{ route('anggota.destroy', $item->id_anggota) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-btn">Hapus</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
