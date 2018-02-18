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
            <th>نویسنده</th>
            <td>{{ $plan['user']->fullName() }}</td>
        </tr>

        <tr>
            <th>عنوان</th>
            <td>{{ $plan['title'] }}</td>
        </tr>

        <tr>
            <th>قیمت</th>
            <td>{{ $plan['price'] }}</td>
        </tr>

        <tr>
            <th>محتوا</th>
            <td>{!! $plan['content'] !!}</td>
        </tr>

        <tr>
            <th>تاریخ ایجاد</th>
            <td>{{ $plan['created_at'] }}</td>
        </tr>

        <tr>
            <th>تاریخ ویرایش</th>
            <td>{{ $plan['updated_at'] }}</td>
        </tr>

        </tbody>
    </table>

@stop

@section('helper_block')
    <div class="form-group helper-block">
        <div class="pull-left">
            {{ Breadcrumbs::render('plan-show', $plan) }}
        </div>

        <div class="text-right">
            <a href="{{ route('admin.plan.edit', $plan->id) }}" class="btn btn-info">ویرایش</a>
        </div>
    </div>
@stop