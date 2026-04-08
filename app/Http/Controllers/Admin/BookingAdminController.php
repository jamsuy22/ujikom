<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingAdminController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['user', 'layanan'])
            ->latest()
            ->get();

        return view('admin.booking.index', compact('bookings'));
    }

    public function updateStatus(Request $request, Booking $booking)
    {
        $request->validate([
            'status' => 'required|in:pending,diproses,selesai,ditolak'
        ]);

        $booking->update([
            'status' => $request->status
        ]);

        return back()->with('success', 'Status berhasil diubah');
    }
}