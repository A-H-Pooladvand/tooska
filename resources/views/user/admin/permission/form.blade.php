@extends('_layouts.admin.index')

@section('content')

    <form action="{{ route('admin.permission.store') }}" method="post" id="form">
        {{ csrf_field() }}

        <div class="row">

            <div class="col-sm-7">

                <div class="form-group">
                    <label for="input_name" class="control-label">نامک</label>
                    <input type="text" name="name" id="input_name" class="form-control" placeholder="فقط حروف انگلیسی و یا زیر خط و یا خط تیره">
                </div>


                <div class="form-group">
                    <label for="input_display_name" class="control-label">نام نمایشی</label>
                    <input type="text" name="display_name" id="input_display_name" class="form-control" placeholder="برای نمایش برای دیگران">
                </div>


                <div class="form-group">
                    <label for="input_description" class="control-label">توضیحات</label>
                    <textarea name="description" id="input_description" class="form-control" cols="30" rows="6" placeholder="توضیحاتی در مورد این دسترسی"></textarea>
                </div>

            </div>

            <div class="col-sm-5">

                <div class="form-group">
                    <label for="input_permissions" class="control-label">دسترسی ها</label>
                    <div class="checkbox"><label><input type="checkbox" value="create">&nbsp;ساخت</label></div>
                    <div class="checkbox"><label><input type="checkbox" value="show">&nbsp;مشاهده</label></div>
                    <div class="checkbox"><label><input type="checkbox" value="edit">&nbsp;ویرایش</label></div>
                    <div class="checkbox"><label><input type="checkbox" value="destroy">&nbsp;حذف</label></div>
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
            <a href="{{ route('admin.permission.index') }}" class="btn btn-danger">انصراف</a>
        </div>

    </div>

@stop