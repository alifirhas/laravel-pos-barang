<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // Logika untuk memeriksa peran pengguna
        if ($request->user()->role === $role) {
            return $next($request);
        }

        // Arahkan pengguna ke halaman yang sesuai jika peran tidak cocok
        abort(code: 403);
    }
}
