<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
<<<<<<< HEAD
use App\Models\Pelanggan;
=======
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34

class UserController extends Controller
{
    public function service()
    {
        $layanans = Layanan::all();
        return view('user.service', compact('layanans'));
    }

<<<<<<< HEAD
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
=======
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34
}
