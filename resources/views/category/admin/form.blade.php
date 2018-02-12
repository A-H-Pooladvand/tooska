@extends('_layouts.admin.index')

@section('content')

    <form action="{{ $form['action'] }}" method="post" id="form">
        @if(!empty($form['method'])) {{ method_field($form['method']) }} @endif

        <div class="row">

            <div class="col-sm-4">
                <div class="form-group">
                    <label for="input_slug" class="control-label">نامک</label>
                    <input id="input_slug" name="slug" type="text" class="form-control" placeholder="فقط حروف انگلیسی، زیرخط و یا خط تیره" @if(!empty($category['slug'])) value="{{ $category['slug'] }}" @endif>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for="input_title" class="control-label">عنوان دسته بندی</label>
                    <input id="input_title" name="title" type="text" class="form-control" @if(!empty($category['title'])) value="{{ $category['title'] }}" @endif>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for="input_type" class="control-label">نوع دسته بندی</label>
                    <select name="type" id="input_type" class="form-control">
                        <option disabled selected>انتخاب نمایید</option>
                        @foreach($category->categoryTypes() as $item)
                            <option @if(!empty($category['category_type']) && $category['category_type'] === $item['value']) selected @endif value="{{ $item['value'] }}">{{ $item['title'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="clearfix"></div>

        </div>

        @push('scripts')
            <script>
                $('#lfm').filemanager('image');
            </script>
        @endpush

    </form>

@stop

@section('helper_block')

    <div class="form-group helper-block">

        <div class="pull-left">
            @if(!empty($category['slug']))
                {{ Breadcrumbs::render('category-edit', $category) }}
            @else
                {{ Breadcrumbs::render('category-create') }}
            @endif
        </div>

        <div class="text-right">
            <button type="button" class="btn btn-info btn-ajax">ذخیره</button>
        </div>

    </div>

@stop