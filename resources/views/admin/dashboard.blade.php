@extends('layouts.admin')
@section('content')
    <h3>Dashboard Admin</h3>
    <ul>
        <li>Total Buku: {{ $totalBuku }}</li>
        <li>Total Anggota: {{ $totalAnggota }}</li>
        <li>Total Peminjaman: {{ $totalPinjam }}</li>
        <li>Total Denda: {{ $totalDenda }}</li>
    </ul>
@endsection
