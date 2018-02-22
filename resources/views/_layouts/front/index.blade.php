<!doctype html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="{{ config('app.locale') }}> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="{{ config('app.locale') }}> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="{{ config('app.locale') }}> <![endif]-->
<html lang="{{ config('app.locale') }}">

<head>
    @include('_layouts.front.includes.styles')
    @stack('page-styles')
    @stack('styles')
</head>

<body>

<div id="wrapper">

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

</div>
</body>

</html>