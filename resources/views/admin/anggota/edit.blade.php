@extends('layouts.admin')
@section('content')
    <h3>Edit Data Anggota</h3>
    <form action="{{ route('anggota.update', $anggota->id_anggota) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ $anggota->nama }}" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ $anggota->email }}" required><br><br>

        <label>No HP:</label><br>
        <input type="text" name="no_hp" value="{{ $anggota->no_hp }}"><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat">{{ $anggota->alamat }}</textarea><br><br>

        <button type="submit">Perbarui</button>
    </form>
@endsection
