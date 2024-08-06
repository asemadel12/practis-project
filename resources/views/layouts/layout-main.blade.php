<!DOCTYPE html>
<html dir="rtl" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('bootstrap.bootstrap-css')
    <style>
        html,
        body {
            height: 100%;
        }
    </style>
    <title>@yield('page-title')</title>
</head>

<body>
    <section class="d-flex align-items-center justify-content-around bg-secondary h-10">
        <div class="w-20">
            <!-- Logout Form -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

            <!-- Logout Link -->
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="btn btn-danger">خروج</a>
        </div>
        <div class="w-60">
            <h2 style="color: white;" class="text-center">مرحبا بكم</h2>
        </div>
        <div class="w-20">
            <a href="{{ route('home') }}" class="btn btn-primary">الرئيسية</a>
            <a href="{{ route('upload-items') }}" class="btn btn-primary">رفع اصناف</a>
        </div>
    </section>
    @yield('content')
    @include('bootstrap.bootstrap-js')
</body>

</html>
