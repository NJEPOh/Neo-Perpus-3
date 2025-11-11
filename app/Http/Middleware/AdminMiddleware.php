<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Jika user login via Auth dan berasal dari model Admin
        if (Auth::check() && Auth::user() instanceof Admin) {
            return $next($request);
        }

        // Atau jika Anda masih simpan session('role') sebagai cadangan
        if (session('role') === 'admin') {
            return $next($request);
        }

        return redirect('/login')->with('error', 'Akses ditolak. Silakan login sebagai admin.');
    }
}
