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
    <h1>المدونه</h1>
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3">
                المدونه
                <small class="text-muted">({{ $blog->count() }})</small>{{-- عدد المدونه --}}
            </h1>
            <a href="/addblogadmin" class="btn btn-primary">
                <i class="fa fa-plus me-1"></i> اضافه مدونه
            </a>
        </div>


        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>title</th>
                        <th>الوصف</th>



                        <th class="text-center">إجراءات</th>
                        <th class="text-center">تاريخ الاانشاء</th>
                        <th class="text-center">تاريخ التعديل</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blog as $u)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $u->title }}</td>
                            <td>{{ $u->description }}</td>

                            <td class="text-center">
                                <a href="/updatebog/{{ $u->id }}" class="btn btn-sm btn-warning me-1">
                                    <i class="fa fa-edit"></i> تعديل
                                </a>
                                <form action="/deletelogadmin/{{ $u->id }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('هل أنت متأكد من الحذف؟')">
                                        <i class="fa fa-trash"></i> حذف
                                    </button>
                                </form>
                            </td>
                            <td class="text-center">{{ $u->created_at }}</td>
                            <td class="text-center">
                                @if($u->updated_at && $u->updated_at != $u->created_at){{-- اذا لم يحصل تعديل يخليهن شرطات --}}
                                   :<p style="color: red"> تاريخ تعديل في </p>
                                {{ $u->updated_at }}
                                @else
                                    -----
                                @endif
                            </td>

                        </tr>
                    @endforeach

                    @if($blog->isEmpty())
                        <tr>
                            <td colspan="5" class="text-center text-muted">لا يوجد مدونه حاليا حالياً</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
