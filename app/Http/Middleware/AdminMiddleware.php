<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role == 1) { // Assuming 1 is the role for admin
            return $next($request);
        }
        return redirect('/home');
    }
}
