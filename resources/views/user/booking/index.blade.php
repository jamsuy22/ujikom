@extends('layouts.user')

@section('content')

<div class="container py-5">
    <h2 class="fw-bold mb-4">Booking Saya</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow border-0">
        <div class="card-body p-0">
            <table class="table table-hover mb-0">
                <thead class="table-dark">
                    <tr>
                        <th class="p-3">No</th>
                        <th class="p-3">Layanan</th>
                        <th class="p-3">Tanggal</th>
                        <th class="p-3">Catatan</th>
                        <th class="p-3">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($bookings as $b)
                    <tr>
                        <td class="p-3">{{ $loop->iteration }}</td>
                        <td class="p-3 fw-semibold">{{ $b->layanan->nama_layanan ?? '-' }}</td>
                        <td class="p-3">{{ \Carbon\Carbon::parse($b->tanggal)->format('d M Y') }}</td>
                        <td class="p-3">{{ $b->catatan ?? '-' }}</td>
                        <td class="p-3">
                            @if($b->status == 'pending')
                                <span style="padding: 4px 12px; background-color: #fef3c7; color: #92400e; border-radius: 999px; font-size: 12px; font-weight: 600;">Pending</span>
                            @elseif($b->status == 'diproses')
                                <span style="padding: 4px 12px; background-color: #dbeafe; color: #1e40af; border-radius: 999px; font-size: 12px; font-weight: 600;">Diproses</span>
                            @elseif($b->status == 'selesai')
                                <span style="padding: 4px 12px; background-color: #d1fae5; color: #065f46; border-radius: 999px; font-size: 12px; font-weight: 600;">Selesai</span>
                            @elseif($b->status == 'ditolak')
                                <span style="padding: 4px 12px; background-color: #fee2e2; color: #991b1b; border-radius: 999px; font-size: 12px; font-weight: 600;">Ditolak</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center p-4 text-muted">
                            Belum ada booking. <a href="{{ route('user.service') }}">Booking sekarang</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection