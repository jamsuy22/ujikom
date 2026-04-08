<<<<<<< HEAD
@extends('layouts.user')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card shadow p-4">
                <h3 class="text-center mb-4">Login</h3>

                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- EMAIL -->
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email"
                               class="form-control"
                               value="{{ old('email') }}"
                               required>
                    </div>

                    <!-- PASSWORD -->
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password"
                               class="form-control"
                               required>
                    </div>

                    <!-- REMEMBER -->
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="remember" class="form-check-input">
                        <label class="form-check-label">Ingat saya</label>
                    </div>

                    <!-- BUTTON -->
                    <button class="btn btn-primary w-100">
                        Login
                    </button>

                    <!-- LINK -->
                    <div class="text-center mt-3">
                        <a href="{{ route('register') }}">
                            Belum punya akun?
                        </a>
                    </div>

                </form>

            </div>

        </div>

    </div>
</div>

@endsection
=======
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34
