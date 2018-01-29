@extends('_layouts.admin.index')

@section('content')

    <form action="{{ $form['action'] }}" method="post" id="form">
        @if(!empty($form['method'])){{ method_field($form['method']) }}@endif

        <div class="row">

            <div class="col-sm-7">

                <div class="form-group">
                    <label for="input_name" class="control-label">نامک</label>
                    <input type="text" name="name" id="input_name" class="form-control" placeholder="فقط حروف انگلیسی و یا زیر خط و یا خط تیره" @if(!empty($role->name)) value="{{ $role->name }}" @endif>
                </div>


                <div class="form-group">
                    <label for="input_display_name" class="control-label">نام نمایشی</label>
                    <input type="text" name="display_name" id="input_display_name" class="form-control" placeholder="برای نمایش برای دیگران" @if(!empty($role->display_name)) value="{{ $role->display_name }}" @endif>
                </div>


                <div class="form-group">
                    <label for="input_description" class="control-label">توضیحات</label>
                    <textarea name="description" id="input_description" class="form-control" cols="30" rows="6" placeholder="توضیحاتی در مورد این دسترسی">@if(!empty($role->name)) {{ $role->description }} @endif</textarea>
                </div>

            </div>

            <div class="col-sm-5">

                <div class="form-group">
                    <label for="input_roles" class="control-label">دسترسی ها</label>
                    @foreach($permissions as $permission)
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="permissions[]" value="{{ $permission['id'] }}" @if(!empty($rolePermissions) && in_array($permission->id, $rolePermissions)) checked @endif>
                                &nbsp{{ $permission['display_name'] }}
                            </label>
                        </div>
                    @endforeach
                </div>

            </div>

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
            <a href="{{ route('admin.role.index') }}" class="btn btn-danger">انصراف</a>
        </div>

    </div>

@stop