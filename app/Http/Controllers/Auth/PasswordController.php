<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
=======
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
<<<<<<< HEAD
    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        if (!Hash::check($request->current_password, $request->user()->password)) {
            return back()->withErrors([
                'current_password' => 'Password lama salah!'
            ]);
        }

        $request->user()->update([
            'password' => Hash::make($request->password),
=======
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34
        ]);

        return back()->with('status', 'password-updated');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34
