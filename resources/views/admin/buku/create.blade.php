@extends('layouts.admin')
@section('content')
    <h3>Tambah Buku Baru</h3>

    @if ($errors->any())
        <div style="color:red;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        <label>Judul:</label><br>
        <input type="text" name="judul" required><br><br>

        <label>Penulis:</label><br>
        <input type="text" name="penulis" required><br><br>

        <label>Penerbit:</label><br>
        <input type="text" name="penerbit" required><br><br>

        <label>Kategori:</label><br>
        <input type="text" name="kategori" required><br><br>

        <label>Tahun Terbit:</label><br>
        <input type="number" name="tahun_terbit" required><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi"></textarea><br><br>

        <label>Stok:</label><br>
        <input type="number" name="stok" required><br><br>

        <button type="submit">Simpan</button>
    </form>
@endsection
