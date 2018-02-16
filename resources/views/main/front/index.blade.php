@extends('_layouts.front.index')

@section('content')

    <div class="navbar">
        <a class="navbar-brand" href="#">Title</a>
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="{{ route('login') }}">ورود</a>
            </li>
            <li>
                <a href="{{ route('register') }}">ثبت نام</a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="post">
                    {{ csrf_field() }}

                    <button class="btn btn-success">خروج</button>
                </form>
            </li>
        </ul>
    </div>

@stop