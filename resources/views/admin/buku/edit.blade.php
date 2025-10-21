@extends('layouts.admin')
@section('content')
    <h3>Edit Data Buku</h3>

    <form action="{{ route('buku.update', $buku->id_buku) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Judul:</label><br>
        <input type="text" name="judul" value="{{ $buku->judul }}" required><br><br>

        <label>Penulis:</label><br>
        <input type="text" name="penulis" value="{{ $buku->penulis }}" required><br><br>

        <label>Penerbit:</label><br>
        <input type="text" name="penerbit" value="{{ $buku->penerbit }}" required><br><br>

        <label>Kategori:</label><br>
        <input type="text" name="kategori" value="{{ $buku->kategori }}" required><br><br>

        <label>Tahun Terbit:</label><br>
        <input type="number" name="tahun_terbit" value="{{ $buku->tahun_terbit }}" required><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi">{{ $buku->deskripsi }}</textarea><br><br>

        <label>Stok:</label><br>
        <input type="number" name="stok" value="{{ $buku->stok }}" required><br><br>

        <button type="submit">Perbarui</button>
    </form>
@endsection
