<!doctype html>
<html lang="{{ config('app.locale') }}" dir="rtl">

<head>
    @include('_layouts.admin.includes.styles')
    @stack('page-styles')
    @stack('styles')
</head>

<body>

<header>
    @include('_layouts.admin.includes.header')
</header>

<section>
    <!-- Sidebar -->
    @include('_layouts.admin.includes.sidebar')

    <div class="container-fluid" id="admin-layout">

        <div class="form-group helper-block">
            @yield('helper_block')
        </div>

        @yield('content')
    </div>

</section>

<footer>
    @include('_layouts.admin.includes.footer')
</footer>

@include('_layouts.admin.includes.scripts')
@stack('page-scripts')
@stack('scripts')
</body>

</html>

