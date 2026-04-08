<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('layanan')
            ->where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('user.booking.index', compact('bookings'));
    }

    public function create(Layanan $layanan)
    {
        return view('user.booking.create', compact('layanan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'layanan_id' => 'required|exists:layanans,id',
            'tanggal' => 'required|date',
            'catatan' => 'nullable|string'
        ]);

        Booking::create([
            'layanan_id' => $request->layanan_id,
            'user_id' => Auth::id(),
            'tanggal' => $request->tanggal,
            'catatan' => $request->catatan,
            'status' => 'pending'
        ]);

        return redirect()->route('booking.saya')
            ->with('success', 'Booking berhasil!');
    }
}