<?php

namespace App\Http\Controllers\Auth;

use App\Enum\UserRole;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        if (Auth::user()->role === UserRole::ADMIN) {
            return redirect()->intended(route('admin.dashboard', absolute: false));
        }
        elseif (Auth::user()->role === UserRole::EDITOR) {
            return redirect()->intended(route('editor.dashboard', absolute: false));
        }
        elseif (Auth::user()->role === UserRole::SUBDEALER) {
            return redirect()->intended(route('subdealer.dashboard', absolute: false));
        }
        elseif (Auth::user()->role === UserRole::DEALER) {
            return redirect()->intended(route('dealer.dashboard', absolute: false));
        }
        elseif (Auth::user()->role === UserRole::MODERATOR) {
            return redirect()->intended(route('moderator.dashboard', absolute: false));
        }
        elseif (Auth::user()->role === UserRole::CUSTOMER) {
            return redirect()->intended(route('customer.dashboard', absolute: false));
        }
        elseif (Auth::user()->role === UserRole::GUEST) {
            return redirect()->intended(route('guest.dashboard', absolute: false));
        }
        elseif (Auth::user()->role === UserRole::RIDER) {
            return redirect()->intended(route('guest.dashboard', absolute: false));
        }
        elseif (Auth::user()->role === UserRole::SUBDEALER) {
            return redirect()->intended(route('subdealer.dashboard', absolute: false));
        }
        elseif (Auth::user()->role === UserRole::DILLER) {
            return redirect()->intended(route('diller.dashboard', absolute: false));
        }
        elseif (Auth::user()->role === UserRole::SELLER) {
            return redirect()->intended(route('seller.dashboard', absolute: false));
        }
        else {
            return redirect()->intended(route('dashboard', absolute: false));
        }

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
