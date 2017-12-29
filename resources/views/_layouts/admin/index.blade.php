<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    @include('_layouts.admin.includes.styles')
    @stack('styles')
</head>

<body>

<header>
    @include('_layouts.admin.includes.header')
</header>

<section>
    <!-- Sidebar -->
    @include('_layouts.admin.includes.sidebar')

    @yield('content')
</section>

<footer>
    @include('_layouts.admin.includes.footer')
</footer>

@include('_layouts.admin.includes.scripts')
@stack('scripts')
</body>

</html>