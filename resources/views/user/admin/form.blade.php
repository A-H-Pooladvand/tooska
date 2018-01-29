@extends('_layouts.admin.index')

@section('content')

    <form action="{{ $form['action'] }}" method="post" id="form">
        @if(!empty($form['method'])) {{ method_field($form['method']) }} @endif

        <div class="row">

            <div class="col-sm-8">

                <div class="row">

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="name" class="control-label">نام</label>
                            <input id="name" name="name" type="text" class="form-control" @if(!empty($user['name'])) value="{{ $user['name'] }}" @endif>
                        </div>
                    </div>

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="family" class="control-label">نام خانوادگی</label>
                            <input id="family" name="family" type="text" class="form-control" @if(!empty($user['family'])) value="{{ $user['family'] }}" @endif>
                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="username" class="control-label">نام کاربری</label>
                            <input id="username" name="username" type="text" class="form-control" @if(!empty($user['username'])) value="{{ $user['username'] }}" @endif>
                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="email" class="control-label">پست الکترونیکی</label>
                            <input id="email" name="email" type="email" class="form-control" dir="ltr" @if(!empty($user['email'])) value="{{ $user['email'] }}" @endif>
                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="mobile" class="control-label">تلفن همراه</label>
                            <input id="mobile" name="mobile" type="tel" class="form-control" dir="ltr" @if(!empty($user['mobile'])) value="{{ $user['mobile'] }}" @endif>
                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="phone" class="control-label">تلفن منزل</label>
                            <input id="phone" name="phone" type="tel" class="form-control" dir="ltr" @if(!empty($user['phone'])) value="{{ $user['phone'] }}" @endif>
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
                    <img id="avatar-img" width="100%" src="@if(!empty($user['avatar'])) {{ $user['avatar'] }} @endif">
                </div>
            </div>

            @push('scripts')
                <script>
                    $('#lfm').filemanager('image');
                </script>
            @endpush

        </div>

        <hr>

        <h4>
            <strong>دسترسی های فردی کاربر</strong>
        </h4>

        <hr>

        <div class="row">
            @foreach($permissions as $permission)
                <div class="col-md-2 col-sm-3 col-xs-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="permissions[]" value="{{ $permission['id'] }}" @if(!empty($userPermissions) && in_array($permission->id, $userPermissions)) checked @endif>
                            <small>{{ $permission['display_name'] }}</small>
                        </label>
                    </div>
                </div>
            @endforeach
        </div>

    </form>

@stop

@section('helper_block')

    <div class="form-group helper-block">

        <div class="pull-left">
            <p>Breadcrumb</p>
        </div>

        <div class="text-right">
            <button type="button" class="btn btn-info btn-ajax">ذخیره</button>
            <a href="{{ route('admin.user.index') }}" class="btn btn-danger">انصراف</a>
        </div>

    </div>

@stop