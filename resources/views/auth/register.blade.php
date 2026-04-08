@extends('layouts.user')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card shadow p-4">
                <h3 class="text-center mb-4">Register</h3>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" name="name"
                               class="form-control"
                               required>
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email"
                               class="form-control"
                               required>
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password"
                               class="form-control"
                               required>
                    </div>

                    <div class="mb-3">
                        <label>Konfirmasi Password</label>
                        <input type="password" name="password_confirmation"
                               class="form-control"
                               required>
                    </div>

                    <button class="btn btn-primary w-100">
                        Daftar
                    </button>

                    <div class="text-center mt-3">
                        <a href="{{ route('login') }}">
                            Sudah punya akun?
                        </a>
                    </div>

                </form>

            </div>

        </div>

    </div>
</div>

@endsection