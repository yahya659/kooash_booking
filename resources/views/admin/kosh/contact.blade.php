@extends('layouts.app')

@section('title', 'رسائل التواصل')
@if(session('success'))
    <div style="
                                    background-color: #d4edda;
                                    color: #155724;
                                    border: 1px solid #c3e6cb;
                                    padding: 15px;
                                    border-radius: 5px;
                                    margin-bottom: 20px;
                                    font-weight: bold;
                                    text-align: center;
                                ">
        {{ session('success') }}
    </div>
@endif

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">رسائل التواصل الواردة</h2>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>الاسم</th>
                    <th>الإيميل</th>
                    <th>العنوان</th>
                    <th>الرسالة</th>
                    <th>تاريخ الإرسال</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @forelse($massege as $message)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->subject }}</td>
                        <td>{{ $message->message }}</td>
                        <td>{{ $message->created_at->format('d/m/Y H:i') }}</td>
                        <td>
                            {{-- زر الرد --}}
                            <a href="mailto:{{ $message->email }}" class="btn btn-sm btn-success mb-1">
                                رد على الرسالة
                            </a>


                            {{-- زر الحذف --}}
                            <form action="/deletecontact/{{ $message->id }}" method="POST" style="display:inline-block;">
                                @csrf

                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('هل أنت متأكد من حذف هذه الرسالة؟')">
                                    حذف
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">لا توجد رسائل حالياً</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection