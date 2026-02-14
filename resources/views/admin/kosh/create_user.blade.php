@extends('layouts.app')

@section('title', 'الكوشات')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4">إضافة مستخدم جديد</h1>

        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>الاسم</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>البريد الإلكتروني</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>كلمة المرور</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>تأكيد كلمة المرور</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" name="is_admin" class="form-check-input" id="is_admin">
                <label class="form-check-label" for="is_admin">أدمن</label>
            </div>

            <button type="submit" class="btn btn-primary">حفظ</button>
        </form>
    </div>
@endsection