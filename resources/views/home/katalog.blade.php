@extends('layouts.main')
@section('content')
    <h3>Katalog Buku</h3>

    <table border="1" cellpadding="8">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Kategori</th>
            <th>Stok</th>
            <th>Detail</th>
        </tr>
        @foreach ($buku as $item)
            <tr>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->penulis }}</td>
                <td>{{ $item->kategori }}</td>
                <td>{{ $item->stok }}</td>
                <td><a href="{{ url('buku/' . $item->id_buku) }}">Lihat</a></td>
            </tr>
        @endforeach
    </table>
@endsection
