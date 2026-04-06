<?php

namespace App\Http\Controllers;

use App\Models\Bengkel;
use App\Models\Layanan;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBengkel = Bengkel::count();
        $totalLayanan = Layanan::count();
        $totalUser = User::count();

        return view('dashboard', compact(
            'totalBengkel',
            'totalLayanan',
            'totalUser'
        ));
    }
}