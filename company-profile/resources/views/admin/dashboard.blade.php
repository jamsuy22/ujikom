@extends('layouts.backend')

@section('content')
<div class="w-full px-6 py-6 mx-auto">

    {{-- HEADER --}}
    <h2 class="text-xl font-bold mb-6">Dashboard Admin</h2>

    {{-- STATISTIK --}}
    <div class="flex flex-wrap -mx-3">

        {{-- Bengkel --}}
        <div class="w-full sm:w-1/2 xl:w-1/4 px-3 mb-6">
            <div class="bg-white shadow rounded-xl p-4">
                <p class="text-sm text-gray-500">Total Bengkel</p>
                <h4 class="text-2xl font-bold">{{ $totalBengkel }}</h4>
            </div>
        </div>

        {{-- Layanan --}}
        <div class="w-full sm:w-1/2 xl:w-1/4 px-3 mb-6">
            <div class="bg-white shadow rounded-xl p-4">
                <p class="text-sm text-gray-500">Total Layanan</p>
                <h4 class="text-2xl font-bold">{{ $totalLayanan }}</h4>
            </div>
        </div>

        {{-- Pelanggan --}}
        <div class="w-full sm:w-1/2 xl:w-1/4 px-3 mb-6">
            <div class="bg-white shadow rounded-xl p-4">
                <p class="text-sm text-gray-500">Total Pelanggan</p>
                <h4 class="text-2xl font-bold">{{ $totalPelanggan }}</h4>
            </div>
        </div>

        {{-- User --}}
        <div class="w-full sm:w-1/2 xl:w-1/4 px-3 mb-6">
            <div class="bg-white shadow rounded-xl p-4">
                <p class="text-sm text-gray-500">Total User</p>
                <h4 class="text-2xl font-bold">{{ $totalUser }}</h4>
            </div>
        </div>

    </div>

    {{-- QUICK ACTION --}}
    <div class="bg-white shadow rounded-xl p-6 mt-6">
        <h5 class="font-semibold mb-4">Aksi Cepat</h5>

        <div class="flex flex-wrap gap-3">
            <a href="{{ route('admin.bengkel.index') }}" class="btn btn-primary">
                Kelola Bengkel
            </a>

            <a href="{{ route('admin.layanan.index') }}" class="btn btn-success">
                Kelola Layanan
            </a>

            <a href="{{ route('admin.pelanggan.index') }}" class="btn btn-warning">
                Data Pelanggan
            </a>
        </div>
    </div>

</div>
@endsection