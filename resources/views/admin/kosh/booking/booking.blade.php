@extends('layouts.app')

@section('title', 'حجوزات الكوش')

@section('content')
    <table class="table table-bordered table-striped text-center align-middle">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>اسم المستخدم</th>
                <th>الإيميل</th>
                <th>اسم الكوشة</th>
                <th>تاريخ الحجز</th>
                <th>الحالة</th>
                <th>تاريخ الحجز</th>
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @forelse($bookings as $booking)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $booking->user->name }}</td>
                    <td>{{ $booking->user->email }}</td>
                    <td>{{ $booking->kosh->name ?? '—' }}</td>
                    <td>{{ $booking->date }}</td>

                    {{-- الحالة --}}
                    <td>
                        @if($booking->status == 'pending')
                            <span class="badge bg-warning">قيد الانتظار</span>
                        @elseif($booking->status == 'accepted')
                            <span class="badge bg-success">مقبول</span>
                        @else
                            <span class="badge bg-danger">مرفوض</span>
                        @endif
                    </td>

                    {{-- تاريخ الإنشاء --}}
                    <td>{{ $booking->created_at ?? '—' }}</td>

                    {{-- الإجراءات --}}
                    <td>
                        @if($booking->status == 'pending')
                            <form action="{{ route('booking.accept', $booking->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success btn-sm">قبول</button>
                            </form>

                            <form action="{{ route('booking.reject', $booking->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-danger btn-sm">رفض</button>
                            </form>
                        @else
                            —
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">لا توجد حجوزات حتى الآن</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
