
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