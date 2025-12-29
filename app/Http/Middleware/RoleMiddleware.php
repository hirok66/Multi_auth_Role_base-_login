<?php

namespace App\Http\Middleware;

use Closure;
use App\Enum\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         if(Auth::user()->role !== UserRole::GUEST){
            return redirect() -> route('dashboard') -> with('error', 'You do not have guest access.');
        }
        return $next($request);
    }
}
