@extends('_layouts.front.index')

@section('content')

    @include('main.front._includes.welcome')

    @include('main.front._includes.heading')
    @include('main.front._includes.why_choose_us')
    @include('main.front._includes.services')
    @include('main.front._includes.pricing')
    @include('main.front._includes.team')
    @include('main.front._includes.samples')
    @include('main.front._includes.blog')

@stop