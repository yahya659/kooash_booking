@extends('layouts.app')

@section('title', 'تعديل كوشة')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">تعديل الكوشة</h2>

    {{-- عرض الأخطاء --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('kosh.update', $kosh->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') {{-- دعم PUT للتحديث --}}

        <!-- اسم الكوشة -->
        <div class="mb-3">
            <label class="form-label">اسم الكوشة</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $kosh->name) }}" required>
        </div>

        <!-- السعر -->
        <div class="mb-3">
            <label class="form-label">السعر</label>
            <input type="number" name="price" class="form-control" value="{{ old('price', $kosh->price) }}" required>
        </div>

        <!-- الوصف -->
        <div class="mb-3">
            <label class="form-label">الوصف</label>
            <textarea name="description" class="form-control" rows="4">{{ old('description', $kosh->description) }}</textarea>
        </div>

        <!-- الحالة -->
        <div class="mb-3">
            <label class="form-label">الحالة</label>
            <select name="status" class="form-select">
                <option value="available" {{ $kosh->status == 'available' ? 'selected' : '' }}>متاحة</option>
                <option value="unavailable" {{ $kosh->status == 'unavailable' ? 'selected' : '' }}>غير متاحة</option>
            </select>
        </div>

        <!-- الصورة الحالية -->
        @if(!empty($kosh->images))
            <div class="mb-3 text-center">
                <label class="form-label d-block">الصورة الحالية</label>
                <img src="{{ asset('uploads/kosh/' . $kosh->images) }}" alt="صورة الكوشة" class="img-thumbnail" style="max-width:200px;">
            </div>
        @endif

        <!-- تغيير الصورة -->
        <div class="mb-3">
            <label class="form-label">تغيير الصورة (اختياري)</label>
            <input type="file" name="images" class="form-control">
        </div>

        <!-- الأزرار -->
        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-success">حفظ التعديلات</button>
            <a href="{{ route('kosh.index') }}" class="btn btn-secondary">رجوع</a>
        </div>
    </form>
</div>
@endsection
