@extends('layouts.app')

@section('title', 'الكوشات')

@section('content')
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
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3">جميع الكوش</h1>
            <h1 class="h3">{{ $koshat->count() }}:عدد الكوش </h1>
            <a href="{{ route('kosh.create') }}" class="btn btn-primary">
                <i class="fa fa-plus me-1"></i> أضف كوشة جديدة
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>الصورة</th>
                        <th>الاسم</th>
                        <th>السعر</th>
                        <th>الحالة</th>
                        <th>الوصف</th>
                        <th class="text-center">إجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($koshat as $kosh)
                        <tr>
                            <td>
                                @if($kosh->images)
                                    <img src="{{ asset('uploads/kosh/' . $kosh->images) }}" alt="{{ $kosh->name }}"
                                        class="img-thumbnail" style="width:80px; height:80px; object-fit:cover;">
                                @else
                                    <span class="text-muted">لا توجد صورة</span>
                                @endif
                            </td>
                            <td>{{ $kosh->name }}</td>
                            <td>{{ number_format($kosh->price, 2) }} ريال</td>
                            <td>
                                @if($kosh->status == 'available')
                                    <span class="badge bg-success">متاح</span>
                                @else
                                    <span class="badge bg-secondary">غير متاح</span>
                                @endif
                            </td>
                            <td>{{ $kosh->description }}</td>
                            <td class="text-center">
                                <a href="{{ route('kosh.edit', $kosh->id) }}" class="btn btn-sm btn-warning me-1">
                                    <i class="fa fa-edit"></i> تعديل
                                </a>
                                <form action="{{ route('kosh.destroy', $kosh->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('هل أنت متأكد من الحذف؟')">
                                        حذف
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    @if($koshat->isEmpty())
                        <tr>
                            <td colspan="5" class="text-center text-muted">لا توجد كوشات حالياً</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    {{-- @include('admin.kosh.user') --}}
@endsection
