@extends('layouts.app')

@section('title', 'اضافة كوشه')

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
<form action="{{ route('kosh.store') }}" method="POST" enctype="multipart/form-data" class="card shadow-sm p-4">
    @csrf

    <h5 class="mb-4 text-center">إضافة كوشة جديدة</h5>

    <!-- اسم الكوشة -->
    <div class="mb-3">
        <label class="form-label">اسم الكوشة</label>
        <input type="text" name="name" class="form-control" placeholder="أدخل اسم الكوشة" required>
    </div>

    <!-- السعر -->
    <div class="mb-3">
        <label class="form-label">السعر</label>
        <input type="number" name="price" class="form-control" placeholder="أدخل السعر" required>
    </div>

    <!-- الصورة -->
    <div class="mb-3">
        <label class="form-label">صورة الكوشة</label>
        <input type="file" name="images" class="form-control" required>
    </div>

    <!-- الوصف -->
    <div class="mb-3">
        <label class="form-label">الوصف</label>
        <textarea name="description" class="form-control" rows="3" placeholder="وصف الكوشة (اختياري)"></textarea>
    </div>

    <!-- زر الحفظ -->
    <div class="d-grid">
        <button type="submit" class="btn btn-success">حفظ الكوشة</button>
    </div>
</form>
@endsection
