@extends('_layouts.admin.index')


@section('content')

    <table class="table table-striped table-show">
        <thead>
        <tr>
            <th>عنوان</th>
            <th>مشخصات</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <th>تصویر</th>
            <td><img src="{{ image_url($sample['image'], 15,15) }}" class="img-circle" width="150" height="150" alt="{{ $sample->title }}" title="{{ $sample->title }}"></td>
        </tr>

        <tr>
            <th>عنوان</th>
            <td>{{ $sample['title'] }}</td>
        </tr>

        <tr>
            <th>لینک</th>
            <td>{{ $sample['link'] }}</td>
        </tr>

        <tr>
            <th>محتوا</th>
            <td>{!! $sample['content'] !!}</td>
        </tr>

        <tr>
            <th>تاریخ ایجاد</th>
            <td>{{ $sample['created_at'] }}</td>
        </tr>

        <tr>
            <th>تاریخ ویرایش</th>
            <td>{{ $sample['updated_at'] }}</td>
        </tr>

        </tbody>
    </table>

@stop

@section('helper_block')
    <div class="form-group helper-block">
        <div class="pull-left">
            {{ Breadcrumbs::render('service-show', $sample) }}
        </div>

        <div class="text-right">
            <a href="{{ route('admin.service.edit', $sample->id) }}" class="btn btn-info">ویرایش</a>
        </div>
    </div>
@stop