@extends('_layouts.front.index')

@section('content')

    @include('main.front._includes.welcome')

    {{--$seo_class = 'db';--}}
    @include('public.header')
    @include('public.menu')
    @include('main.front._includes.home_heading_image')
    @include('main.front._includes.choose_us')
    {{--@include('main.front._includes.analyze_tools')--}}
    {{--@include('main.front._includes.seo_services')--}}
    @include('public.seo_expert_team')
    @include('main.front._includes.pricing')
    @include('main.front._includes.working_process')
    @include('main.front._includes.case_studio_slider')
    {{--@include('main.front._includes.why_seomarkt')--}}
    {{--@include('main.front._includes.testimonials')--}}
    {{--@include('main.front._includes.our_skills')--}}
    {{--@include('main.front._includes.get_quote')--}}
    @include('main.front._includes.seo_blog')
{{--    @include('public.brands_teams')--}}
    @include('public.footer')
    @include('public.ending')

@stop