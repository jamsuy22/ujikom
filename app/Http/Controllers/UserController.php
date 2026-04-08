<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Pelanggan;

class UserController extends Controller
{
    public function service()
    {
        $layanans = Layanan::all();
        return view('user.service', compact('layanans'));
    }

    public function home()
    {
        $layanans = Layanan::latest()->get();

        return view('user.home', compact('layanans'));
    }

    public function pelanggan()
    {
        $pelanggans = Pelanggan::latest()->get();

        return view('user.pelanggan', compact('pelanggans'));
    }

    public function testimonial()
    {
        $pelanggans = Pelanggan::latest()->take(6)->get();

        return view('user.testimonial', compact('pelanggans'));
    }
}
