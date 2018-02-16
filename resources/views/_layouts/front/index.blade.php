<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    @include('_layouts.front.includes.styles')
    @stack('page-styles')
    @stack('styles')
</head>

<body>

<header>
    @include('_layouts.front.includes.header')
</header>

<section>
    @yield('content')
</section>

<footer>
    @include('_layouts.front.includes.footer')
</footer>

@include('_layouts.front.includes.scripts')
@stack('page-scripts')
@stack('scripts')
</body>

</html>