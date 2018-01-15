@extends('_layouts.admin.index')

@section('content')

    <form action="{{ route('admin.user.store') }}" method="post" id="form">

        <div class="row">

            <div class="col-sm-8">

                <div class="row">

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="name" class="control-label">نام</label>
                            <input id="name" name="name" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="family" class="control-label">نام خانوادگی</label>
                            <input id="family" name="family" type="text" class="form-control">
                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="username" class="control-label">نام کاربری</label>
                            <input id="username" name="username" type="text" class="form-control">
                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="email" class="control-label">پست الکترونیکی</label>
                            <input id="email" name="email" type="email" class="form-control" dir="ltr">
                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="mobile" class="control-label">تلفن همراه</label>
                            <input id="mobile" name="mobile" type="tel" class="form-control" dir="ltr">
                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="phone" class="control-label">تلفن منزل</label>
                            <input id="phone" name="phone" type="tel" class="form-control" dir="ltr">
                        </div>

                    </div>

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

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="role" class="control-label">نقش</label>
                            <br>
                            <select data-live-search="true" multiple name="role" id="role" class="bootstrap-select">
                                <option>مدیر</option>
                                <option>کاربر</option>
                                <option>ویراستار</option>
                            </select>

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
                    <img id="avatar-img" width="100%">
                </div>
            </div>

            @push('scripts')
                <script>
                    $('#lfm').filemanager('image');
                </script>
            @endpush

        </div>

    </form>

@stop

@section('helper_block')

    <div class="pull-left">
        <p>Breadcrumb</p>
    </div>

    <div class="text-right">
        <button type="button" class="btn btn-primary btn-ajax">ذخیره</button>
        <a href="#" class="btn btn-danger">انصراف</a>
    </div>

@stop