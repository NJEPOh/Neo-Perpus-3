@extends('layouts.admin')
@section('content')
    <h3>Edit Data Peminjaman</h3>
    <form action="{{ route('peminjaman.update', $peminjaman->id_peminjaman) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Anggota:</label><br>
        <select name="id_anggota">
            @foreach ($anggota as $a)
                <option value="{{ $a->id_anggota }}" {{ $peminjaman->id_anggota == $a->id_anggota ? 'selected' : '' }}>
                    {{ $a->nama }}</option>
            @endforeach
        </select><br><br>

        <label>Buku:</label><br>
        <select name="id_buku">
            @foreach ($buku as $b)
                <option value="{{ $b->id_buku }}" {{ $peminjaman->id_buku == $b->id_buku ? 'selected' : '' }}>
                    {{ $b->judul }}</option>
            @endforeach
        </select><br><br>

        <label>Status:</label><br>
        <select name="status">
            <option value="Dipinjam" {{ $peminjaman->status == 'Dipinjam' ? 'selected' : '' }}>Dipinjam</option>
            <option value="Dikembalikan" {{ $peminjaman->status == 'Dikembalikan' ? 'selected' : '' }}>Dikembalikan</option>
            <option value="Terlambat" {{ $peminjaman->status == 'Terlambat' ? 'selected' : '' }}>Terlambat</option>
        </select><br><br>

        <button type="submit">Perbarui</button>
    </form>
@endsection
