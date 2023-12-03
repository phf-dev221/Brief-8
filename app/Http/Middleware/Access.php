<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Access
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        $user = Auth::guard($role)->user();
        if ($user && $user->role === 'admin') {
            return $next($request);
            
        } else if ($user && $user->role === 'user') {
            return $next($request);
        } else {
            return redirect('/')->with('status', 'Vous n\'etes pas autoriser a acceder a cette page');
        }
        return $next($request);

    }
}