<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create()
    {
        if (auth('admin')->check())
             return redirect()->route('admin.dashboard');
        if (auth('web')->check())
           return redirect()->route('user.dashboard');
        if (auth('doctor')->check())
           return redirect()->route('doctor.dashboard');
        if (auth('ray_employee')->check())
           return redirect()->route('ray_employee.dashboard');
        if (auth('laboratorie_employee')->check())
           return redirect()->route('laboratorie_employee.dashboard');
        if (auth('patient')->check())
           return redirect()->route('patient.dashboard');


        return view('dashboard.user.auth.signin');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('user.dashboard', absolute: false));


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
