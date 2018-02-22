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
            <td><img src="{{ image_url($service['image'], 15,15) }}" class="img-circle" width="150" height="150" alt="{{ $service->title }}" title="{{ $service->title }}"></td>
        </tr>

        <tr>
            <th>عنوان</th>
            <td>{{ $service['title'] }}</td>
        </tr>

        <tr>
            <th>محتوا</th>
            <td>{{ $service['content'] }}</td>
        </tr>

        <tr>
            <th>تاریخ ایجاد</th>
            <td>{{ $service['created_at'] }}</td>
        </tr>

        <tr>
            <th>تاریخ ویرایش</th>
            <td>{{ $service['updated_at'] }}</td>
        </tr>

        </tbody>
    </table>

@stop

@section('helper_block')
    <div class="form-group helper-block">
        <div class="pull-left">
            {{ Breadcrumbs::render('service-show', $service) }}
        </div>

        <div class="text-right">
            <a href="{{ route('admin.service.edit', $service->id) }}" class="btn btn-info">ویرایش</a>
        </div>
    </div>
@stop