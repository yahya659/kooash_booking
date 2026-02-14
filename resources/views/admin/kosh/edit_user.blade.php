@extends('layouts.app')

@section('title', 'الكوشات')

@section('content')

  <div class="container-fluid">
    <h1 class="h3 mb-4">تعديل المستخدم</h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>الاسم</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
        </div>

        <div class="mb-3">
            <label>البريد الإلكتروني</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
        </div>

        <div class="mb-3">
            <label>كلمة المرور (اتركها فارغة إذا لم ترغب بتغييرها)</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="mb-3">
            <label>تأكيد كلمة المرور</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" name="is_admin" class="form-check-input" id="is_admin" {{ $user->is_admin ? 'checked' : '' }}>
            <label class="form-check-label" for="is_admin">أدمن</label>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="fa fa-save me-1"></i> حفظ التعديلات
        </button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary ms-2">إلغاء</a>
    </form>
</div>
@endsection
