@extends('layouts.admin')
@section('content')
    <h3>Tambah Anggota Baru</h3>
    <form action="{{ route('anggota.store') }}" method="POST">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <label>No HP:</label><br>
        <input type="text" name="no_hp"><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat"></textarea><br><br>

        <button type="submit">Simpan</button>
    </form>
@endsection
