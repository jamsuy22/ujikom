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
<<<<<<< HEAD
=======
    /**
     * Display the login view.
     */
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34
    public function create(): View
    {
        return view('auth.login');
    }

<<<<<<< HEAD
=======
    /**
     * Handle an incoming authentication request.
     */
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

<<<<<<< HEAD
        $user = Auth::user();

        // 🔥 ROLE BASED REDIRECT
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        // default user
        return redirect()->route('home');
    }

=======
        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
<<<<<<< HEAD
=======

>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34
        $request->session()->regenerateToken();

        return redirect('/');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34
