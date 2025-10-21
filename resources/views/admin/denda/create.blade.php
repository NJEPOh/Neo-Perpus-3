@extends('layouts.admin')
@section('content')
    <h3>Tambah Denda</h3>
    <form action="{{ route('denda.store') }}" method="POST">
        @csrf
        <label>ID Peminjaman:</label><br>
        <select name="id_peminjaman" required>
            <option value="">-- Pilih Peminjaman --</option>
            @foreach ($peminjaman as $p)
                <option value="{{ $p->id_peminjaman }}">#{{ $p->id_peminjaman }}</option>
            @endforeach
        </select><br><br>

        <label>Jumlah Denda:</label><br>
        <input type="number" step="0.01" name="jumlah_denda" required><br><br>

        <label>Keterangan:</label><br>
        <textarea name="keterangan"></textarea><br><br>

        <button type="submit">Simpan</button>
    </form>
@endsection
