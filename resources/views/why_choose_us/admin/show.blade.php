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
            <td><img src="{{ image_url($whyChooseUs['image'], 15,15) }}" class="img-circle" width="150" height="150" alt="{{ $whyChooseUs->title }}" title="{{ $whyChooseUs->title }}"></td>
        </tr>

        <tr>
            <th>نویسنده</th>
            <td>{{ $whyChooseUs['user']->fullName() }}</td>
        </tr>

        <tr>
            <th>عنوان</th>
            <td>{{ $whyChooseUs['title'] }}</td>
        </tr>

        <tr>
            <th>خلاصه</th>
            <td>{{ $whyChooseUs['summary'] }}</td>
        </tr>

        <tr>
            <th>تاریخ ایجاد</th>
            <td>{{ $whyChooseUs['created_at'] }}</td>
        </tr>

        <tr>
            <th>تاریخ ویرایش</th>
            <td>{{ $whyChooseUs['updated_at'] }}</td>
        </tr>

        </tbody>
    </table>

@stop

@section('helper_block')
    <div class="form-group helper-block">
        <div class="pull-left">
            {{ Breadcrumbs::render('why_choose_us-show', $whyChooseUs) }}
        </div>

        <div class="text-right">
            <a href="{{ route('admin.why_choose_us.edit', $whyChooseUs->id) }}" class="btn btn-info">ویرایش</a>
        </div>
    </div>
@stop