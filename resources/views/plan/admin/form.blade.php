@extends('_layouts.admin.index')

@section('content')

    <form action="{{ $form['action'] }}" method="post" id="form">
        {{ method_field($form['method'] ?? 'POST') }}

        <div class="row">

            <div class="col-sm-8">

                <div class="form-group">
                    <label for="title" class="control-label">عنوان</label>
                    <input id="title" name="title" type="text" class="form-control" value="{{ $plan->title ?? '' }}">
                </div>

                <div class="form-group">
                    <label for="price" class="control-label">قیمت</label>
                    <input id="price" name="price" type="text" class="form-control" value="{{ $plan->price ?? '' }}">
                </div>

                <div class="form-group">
                    @script(tinymce/tinymce.js)
                    <label for="input_content" class="control-label">محتوا</label>
                    <textarea name="content" id="input_content" class="tinymce">{{ $plan->content ?? '' }}</textarea>
                </div>

            </div>


        </div>

        <hr>

    </form>


@stop

@section('helper_block')

    <div class="form-group helper-block">

        <div class="pull-left">
            @if(!empty($plan))
                {{ Breadcrumbs::render('plan-edit', $plan) }}
            @else
                {{ Breadcrumbs::render('plan-create') }}
            @endif
        </div>

        <div class="text-right">
            <button type="button" class="btn btn-info btn-ajax">ذخیره</button>
        </div>

    </div>

@stop