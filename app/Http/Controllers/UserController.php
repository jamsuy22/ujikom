<?php

namespace App\Http\Controllers;

use App\Models\Layanan;

class UserController extends Controller
{
    public function service()
    {
        $layanans = Layanan::all();
        return view('user.service', compact('layanans'));
    }

}
