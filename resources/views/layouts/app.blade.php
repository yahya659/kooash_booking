<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'لوحة الإدارة')</title>

    <!-- ملفات CSS للتمبلت -->
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}">
    @stack('css')
</head>

<body>
    <div class="d-flex">

        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- Main Content -->
      
            <!-- Header -->
            {{-- @include('layouts.header') --}}

            <!-- Page Content -->
            <div class="container-fluid">
                @yield('content')
            </div>

    </div>

    <!-- ملفات JS للتمبلت -->
    {{--
    <script src="{{ asset('js/jquery.min.js') }}"></script> --}}
    <script src="{{ asset('js/sb-admin-2.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    @stack('js')
</body>

</html>
