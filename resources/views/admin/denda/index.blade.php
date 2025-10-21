@extends('layouts.admin')
@section('content')
    <h3>Data Denda</h3>
    <a href="{{ route('denda.create') }}">+ Tambah Denda</a>
    <table border="1" cellpadding="8">
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
                    <td>
                        <a href="{{ route('denda.edit', $item->id_denda) }}">Edit</a> |
                        <form action="{{ route('denda.destroy', $item->id_denda) }}" method="POST" style="display:inline;">
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
