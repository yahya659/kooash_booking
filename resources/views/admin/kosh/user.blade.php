@extends('layouts.app')

@section('title', 'المسجلين في الموقع')

@section('content')
    <br />
    <br />
    <br />
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

    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3">
                المستخدمين
                <small class="text-muted">({{ $users->count() }})</small>{{-- عدد المستخدمين --}}
            </h1>
            <a href="{{ route('users.create') }}" class="btn btn-primary">
                <i class="fa fa-plus me-1"></i> أضف مستخدم جديد
            </a>
        </div>


        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>الاسم</th>
                        <th>البريد الإلكتروني</th>
                        <th>الدور</th>
                        <th class="text-center">إجراءات</th>
                        <th class="text-center">تاريخ الاانشاء</th>
                        <th class="text-center">تاريخ التعديل</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $u)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>
                                @if($u->is_admin)
                                    <span class="badge bg-success">أدمن</span>
                                @else
                                    <span class="badge bg-secondary">مستخدم</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route('users.edit', $u->id) }}" class="btn btn-sm btn-warning me-1">
                                    <i class="fa fa-edit"></i> تعديل
                                </a>
                                <form action="{{ route('users.destroy', $u->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('هل أنت متأكد من الحذف؟')">
                                        <i class="fa fa-trash"></i> حذف
                                    </button>
                                </form>
                            </td>
                            <td>{{ $u->created_at }}</td>
                            <td>
                                @if($u->updated_at && $u->updated_at != $u->created_at){{-- اذا لم يحصل تعديل يخليهن شرطات --}}
                                    {{ $u->updated_at }}
                                @else
                                    ---
                                @endif
                            </td>

                        </tr>
                    @endforeach

                    @if($users->isEmpty())
                        <tr>
                            <td colspan="5" class="text-center text-muted">لا يوجد مستخدمين حالياً</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
