<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Anggota;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // Cek login admin dulu
        $admin = Admin::where('username', $request->username)->first();
        if ($admin && Hash::check($request->password, $admin->password)) {
            Auth::login($admin);
            session(['role' => 'admin', 'id_admin' => $admin->id_admin, 'nama' => $admin->nama]);
            return redirect('/admin');
        }

        // Cek login anggota
        $anggota = Anggota::where('email', $request->username)->first();
        if ($anggota && Hash::check($request->password, $anggota->password)) {
            Auth::login($anggota);
            session(['role' => 'anggota', 'id_anggota' => $anggota->id_anggota, 'nama' => $anggota->nama]);
            return redirect('/');
        }

        return back()->with('error', 'Username atau password salah!');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:anggota,email',
            'password' => 'required|min:5'
        ]);

        Anggota::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tanggal_daftar' => now()
        ]);

        return redirect('/login')->with('success', 'Pendaftaran berhasil! Silakan login.');
    }

    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect('/login');
    }
}
