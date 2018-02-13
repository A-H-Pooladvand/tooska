@extends('_layouts.admin.index')


@section('content')

    <p class="well">{!! $about->content !!}</p>

@stop

@section('helper_block')
    <div class="form-group helper-block">
        <div class="text-right">
            <a href="{{ route('admin.about.edit', 1) }}" class="btn btn-info">ویرایش</a>
        </div>
    </div>
@stop