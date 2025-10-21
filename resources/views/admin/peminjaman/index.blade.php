@extends('layouts.admin')
@section('content')
    <h3>Data Peminjaman</h3>
    <a href="{{ route('peminjaman.create') }}">+ Tambah Peminjaman</a>
    <table border="1" cellpadding="8">
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
                        <a href="{{ route('peminjaman.edit', $item->id_peminjaman) }}">Edit</a> |
                        <form action="{{ route('peminjaman.destroy', $item->id_peminjaman) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
