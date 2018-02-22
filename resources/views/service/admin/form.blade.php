@extends('_layouts.admin.index')

@section('content')

    <form action="{{ $form['action'] }}" method="post" id="form">
        {{ method_field($form['method'] ?? 'POST') }}

        <div class="row">

            <div class="col-sm-8">

                <div class="form-group">
                    <label for="title" class="control-label">عنوان</label>
                    <input id="title" name="title" type="text" class="form-control" value="{{ $service->title ?? '' }}">
                </div>

                <div class="form-group">
                    @script(tinymce/tinymce.js)
                    <label for="input_content" class="control-label">محتوا</label>
                    <textarea name="content" id="input_content" class="tinymce">{{ $service->content ?? '' }}</textarea>
                </div>

            </div>

            <div class="col-sm-4">

                <div class="form-group">
                    <label for="image" class="control-label">تصویر</label>
                    <div class="input-group">
                                <span class="input-group-btn">
                                    <a id="lfm" data-input="image" data-preview="image-img" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i>
                                        <span>انتخاب</span>
                                    </a>
                                </span>
                        <input id="image" class="form-control" type="text" name="image">
                    </div>
                </div>

                <div class="form-group">
                    <img id="image-img" width="100%" src="{{ image_url($service->image ?? '#', 36, 22) }}">
                </div>

                @push('scripts')
                    <script>
                        $('#lfm').filemanager('image');
                    </script>
                @endpush
            </div>

        </div>

        <hr>

    </form>


@stop

@section('helper_block')

    <div class="form-group helper-block">

        <div class="pull-left">
            @if(!empty($service))
                {{ Breadcrumbs::render('service-edit', $service) }}
            @else
                {{ Breadcrumbs::render('service-create') }}
            @endif
        </div>

        <div class="text-right">
            <button type="button" class="btn btn-info btn-ajax">ذخیره</button>
        </div>

    </div>

@stop