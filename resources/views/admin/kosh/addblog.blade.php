@extends('layouts.app')

@section('title', 'المدونه')
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
    <h>add blog</h>
    <div class="container-fluid">
        <h1 class="h3 mb-4">إضافة مدونه جديد</h1>

        <form action="/storeaddblogadmin" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>title</label>
                <input type="text" name="title" class="form-control"  required>
            </div>
            <div class="mb-3">
                <label>صوره المدونه</label>
                <input type="file" name="image" class="form-control"  required>
            </div>
            <div class="mb-3">
                <label>الوصف</label>
                <input type="text" name="description" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">حفظ</button>
        </form>
    </div>
@endsection
