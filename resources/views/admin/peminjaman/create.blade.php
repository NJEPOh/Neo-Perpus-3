@extends('layouts.admin')
@section('content')
    <h3>Tambah Peminjaman Baru</h3>
    <form action="{{ route('peminjaman.store') }}" method="POST">
        @csrf
        <label>Anggota:</label><br>
        <select name="id_anggota" required>
            <option value="">-- Pilih Anggota --</option>
            @foreach ($anggota as $a)
                <option value="{{ $a->id_anggota }}">{{ $a->nama }}</option>
            @endforeach
        </select><br><br>

        <label>Buku:</label><br>
        <select name="id_buku" required>
            <option value="">-- Pilih Buku --</option>
            @foreach ($buku as $b)
                <option value="{{ $b->id_buku }}">{{ $b->judul }}</option>
            @endforeach
        </select><br><br>

        <label>Tanggal Pinjam:</label><br>
        <input type="date" name="tanggal_pinjam" required><br><br>

        <label>Tanggal Kembali:</label><br>
        <input type="date" name="tanggal_kembali" required><br><br>

        <button type="submit">Simpan</button>
    </form>
@endsection
