@extends('_layouts.admin.index')

@section('content')

    <form action="{{ $form['action'] }}" method="post" id="form">
        {{ method_field($form['method'] ?? 'POST') }}

        <div class="row">

            <div class="col-sm-8">

                <div class="row">

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="name" class="control-label">نام</label>
                            <input id="name" name="name" type="text" class="form-control" value="{{ $user->name ?? '' }}">
                        </div>
                    </div>

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="family" class="control-label">نام خانوادگی</label>
                            <input id="family" name="family" type="text" class="form-control" value="{{ $user->family ?? '' }}">
                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="username" class="control-label">نام کاربری</label>
                            <input id="username" name="username" type="text" class="form-control" value="{{ $user->username ?? '' }}">
                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="email" class="control-label">پست الکترونیکی</label>
                            <input id="email" name="email" type="email" class="form-control" dir="ltr" value="{{ $user->email ?? '' }}">
                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="mobile" class="control-label">تلفن همراه</label>
                            <input id="mobile" name="mobile" type="tel" class="form-control" dir="ltr" value="{{ $user->mobile ?? '' }}">
                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="phone" class="control-label">تلفن منزل</label>
                            <input id="phone" name="phone" type="tel" class="form-control" dir="ltr" value="{{ $user->phone ?? '' }}">
                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="role" class="control-label">نقش</label>
                            <br>
                            <select data-live-search="true" multiple name="roles[]" id="role" class="bootstrap-select">
                                @foreach($roles as $role)
                                    <option value="{{ $role['id'] }}" @if(!empty($userRoles) && in_array($role['id'], $userRoles)) selected @endif>
                                        {{ $role['display_name'] }}
                                    </option>
                                @endforeach
                            </select>

                        </div>

                    </div>

                    <div class="clearfix"></div>

                    @if(!empty($user))
                        <div class="col-sm-12">
                            <div class="alert alert-warning">
                                <small class="text-warning">اگر نمیخواهید رمز عبور خود را تغییر دهید این قسمت را تکمل نفرمایید.</small>
                            </div>
                        </div>
                    @endif

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="password" class="control-label">رمز عبور</label>
                            <input id="password" name="password" type="password" class="form-control" dir="ltr">
                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="password_confirmation" class="control-label">تکرار رمز عبور</label>
                            <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" dir="ltr">
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-sm-4">

                <div class="form-group">
                    <label for="avatar" class="control-label">تصویر کاربری</label>
                    <div class="input-group">
                    <span class="input-group-btn">
                            <a id="lfm" data-input="avatar" data-preview="avatar-img" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i>
                                <span>انتخاب</span>
                            </a>
                        </span>
                        <input id="avatar" class="form-control" type="text" name="avatar">
                    </div>
                </div>

            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <img id="avatar-img" width="100%" src="{{ $user->avatar ?? '#' }}">
                </div>
            </div>

            @push('scripts')
                <script>
                    $('#lfm').filemanager('image');
                </script>
            @endpush

        </div>

        <hr>

    </form>


@stop

@section('helper_block')

    <div class="form-group helper-block">

        <div class="pull-left">
            @if(!empty($user))
                {{ Breadcrumbs::render('user-edit', $user) }}
            @else
                {{ Breadcrumbs::render('user-create') }}
            @endif
        </div>

        <div class="text-right">
            <button type="button" class="btn btn-info btn-ajax">ذخیره</button>
        </div>

    </div>

@stop