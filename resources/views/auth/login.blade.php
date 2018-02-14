@extends('_layouts.front.index')

@section('content')
    <div class="login__wrapper">
        <div class="container position-relative">

            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="login__from">

                            <div class="form-group">
                                <h3 class="text-center">
                                    <strong>وارد شوید</strong>
                                </h3>
                            </div>

                            <div class="form-group-lg form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <div class="">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="ایمیل">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group-lg form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                <div class="">
                                    <input id="password" type="password" class="form-control" name="password" required placeholder="رمزعبور">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> <span>من را بخاطر بسپار</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">ورود</button>
                                    <hr>
                                    <a class="btn btn-link" href="{{ route('password.request') }}">رمز عبور خود را فراموش کرده اید؟</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </form>


@endsection
