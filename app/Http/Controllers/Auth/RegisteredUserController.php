<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
<<<<<<< HEAD
=======
    /**
     * Display the registration view.
     */
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34
    public function create(): View
    {
        return view('auth.register');
    }

<<<<<<< HEAD
=======
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
<<<<<<< HEAD
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email'],
=======
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

<<<<<<< HEAD
        return redirect('/');
    }
}
=======
        return redirect(route('dashboard', absolute: false));
    }
}
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34
