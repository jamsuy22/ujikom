<<<<<<< HEAD
@extends('layouts.user')

@section('content')

<div class="container py-5">

    <h3 class="mb-4">Profile Saya</h3>

    {{-- UPDATE PROFILE --}}
    <div class="card p-4 shadow mb-4">
        <h5 class="mb-3">Informasi Profil</h5>

        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="name" 
                       value="{{ auth()->user()->name }}" 
                       class="form-control">
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" 
                       value="{{ auth()->user()->email }}" 
                       class="form-control">
            </div>

            <button class="btn btn-primary">Update Profile</button>
        </form>
    </div>

    {{-- UPDATE PASSWORD --}}
    <div class="card p-4 shadow mb-4">
        <h5 class="mb-3">Ganti Password</h5>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Password Lama</label>
                <input type="password" name="current_password" class="form-control">
            </div>

            <div class="mb-3">
                <label>Password Baru</label>
                <input type="password" name="password" class="form-control">
            </div>

            <div class="mb-3">
                <label>Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="form-control">
            </div>

            <button class="btn btn-warning">Update Password</button>
        </form>
    </div>

    {{-- DELETE ACCOUNT --}}
    <div class="card p-4 shadow">
        <h5 class="mb-3 text-danger">Hapus Akun</h5>

        <form method="POST" action="{{ route('profile.destroy') }}">
            @csrf
            @method('DELETE')

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <button class="btn btn-danger"
                onclick="return confirm('Yakin mau hapus akun?')">
                Hapus Akun
            </button>
        </form>
    </div>

</div>

@endsection
=======
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34
