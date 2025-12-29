<?php

namespace App\Http\Middleware;

use Closure;
use App\Enum\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class DealerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()->role !== UserRole::DEALER){
            return redirect() -> route('dashboard') -> with('error', 'You do not have dealer access.');
        }
        return $next($request);
    }
}
