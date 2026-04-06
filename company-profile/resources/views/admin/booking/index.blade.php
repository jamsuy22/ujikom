@extends('layouts.backend')

@section('content')

<h4 class="mb-4 font-bold text-lg">Data Booking</h4>

<div class="bg-white rounded shadow p-4 overflow-x-auto">

    @if(session('success'))
        <div class="mb-4 px-4 py-2 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full text-sm" style="border-collapse: collapse;">
        <thead>
            <tr style="background-color: #f3f4f6;">
                <th style="padding: 10px; text-align: left; border: 1px solid #e5e7eb;">No</th>
                <th style="padding: 10px; text-align: left; border: 1px solid #e5e7eb;">User</th>
                <th style="padding: 10px; text-align: left; border: 1px solid #e5e7eb;">Layanan</th>
                <th style="padding: 10px; text-align: left; border: 1px solid #e5e7eb;">Tanggal</th>
                <th style="padding: 10px; text-align: left; border: 1px solid #e5e7eb;">Status</th>
                <th style="padding: 10px; text-align: left; border: 1px solid #e5e7eb;">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse($bookings as $b)
            <tr style="border: 1px solid #e5e7eb;">

                <td style="padding: 10px; border: 1px solid #e5e7eb;">{{ $loop->iteration }}</td>

                <td style="padding: 10px; border: 1px solid #e5e7eb; font-weight: 600;">
                    {{ $b->user->name ?? '-' }}
                </td>

                <td style="padding: 10px; border: 1px solid #e5e7eb;">
                    {{ $b->layanan->nama_layanan ?? '-' }}
                </td>

                <td style="padding: 10px; border: 1px solid #e5e7eb;">
                    {{ \Carbon\Carbon::parse($b->tanggal)->format('d M Y') }}
                </td>

                {{-- STATUS --}}
                <td style="padding: 10px; border: 1px solid #e5e7eb;">
                    @if($b->status == 'pending')
                        <span style="padding: 3px 10px; background-color: #fef3c7; color: #92400e; border-radius: 999px; font-size: 12px; font-weight: 600;">Pending</span>
                    @elseif($b->status == 'diproses')
                        <span style="padding: 3px 10px; background-color: #dbeafe; color: #1e40af; border-radius: 999px; font-size: 12px; font-weight: 600;">Diproses</span>
                    @elseif($b->status == 'selesai')
                        <span style="padding: 3px 10px; background-color: #d1fae5; color: #065f46; border-radius: 999px; font-size: 12px; font-weight: 600;">Selesai</span>
                    @elseif($b->status == 'ditolak')
                        <span style="padding: 3px 10px; background-color: #fee2e2; color: #991b1b; border-radius: 999px; font-size: 12px; font-weight: 600;">Ditolak</span>
                    @endif
                </td>

                {{-- AKSI --}}
                <td style="padding: 10px; border: 1px solid #e5e7eb;">
                    <div style="display: flex; gap: 6px; flex-wrap: wrap;">

                        @if($b->status == 'pending')
                        <form action="{{ route('admin.booking.status', $b->id) }}" method="POST" style="margin:0;">
                            @csrf
                            <input type="hidden" name="status" value="diproses">
                            <button type="submit" style="padding: 5px 12px; background-color: #3b82f6; color: white; border: none; border-radius: 6px; font-size: 12px; cursor: pointer;">Proses</button>
                        </form>
                        @endif

                        @if($b->status == 'pending' || $b->status == 'diproses')
                        <form action="{{ route('admin.booking.status', $b->id) }}" method="POST" style="margin:0;">
                            @csrf
                            <input type="hidden" name="status" value="selesai">
                            <button type="submit" style="padding: 5px 12px; background-color: #22c55e; color: white; border: none; border-radius: 6px; font-size: 12px; cursor: pointer;">Selesai</button>
                        </form>
                        @endif

                        @if($b->status == 'pending' || $b->status == 'diproses')
                        <form action="{{ route('admin.booking.status', $b->id) }}" method="POST" style="margin:0;">
                            @csrf
                            <input type="hidden" name="status" value="ditolak">
                            <button type="submit" style="padding: 5px 12px; background-color: #ef4444; color: white; border: none; border-radius: 6px; font-size: 12px; cursor: pointer;">Tolak</button>
                        </form>
                        @endif

                        @if($b->status == 'selesai' || $b->status == 'ditolak')
                            <span style="color: #9ca3af; font-size: 12px; font-style: italic;">Sudah final</span>
                        @endif

                    </div>
                </td>

            </tr>
            @empty
            <tr>
                <td colspan="6" style="text-align: center; padding: 20px; color: #6b7280;">
                    Belum ada data booking
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

</div>

@endsection