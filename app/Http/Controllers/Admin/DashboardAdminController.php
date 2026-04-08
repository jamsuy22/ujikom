<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bengkel;
use App\Models\Layanan;
use App\Models\Pelanggan;
use App\Models\User;

class DashboardAdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalBengkel' => Bengkel::count(),
            'totalLayanan' => Layanan::count(),
            'totalPelanggan' => Pelanggan::count(),
            'totalUser' => User::count(),
        ]);
    }
}