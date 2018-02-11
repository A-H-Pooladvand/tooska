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
            <th>عنوان</th>
            <td>{{ $blog['title'] }}</td>
        </tr>

        <tr>
            <th>تصویر شاخص</th>
            <td>
                <img src="{{ $blog['image'] }}" width="150" height="100" alt="#">
            </td>
        </tr>

        <tr>
            <th>خلاصه</th>
            <td>{{ $blog['summary'] }}</td>
        </tr>

        <tr>
            <th>محتوا</th>
            <td>{!! $blog['content'] !!}</td>
        </tr>

        <tr>
            <th>نویسنده</th>
            <td>
                <a href="{{ route('admin.user.show', $blog['user']['id']) }}" target="_blank">
                    <strong>
                        {{ $blog['user']->fullName() }}
                    </strong>
                </a>
            </td>
        </tr>

        <tr>
            <th>وضعیت</th>
            <td>{{ $blog['status_fa'] }}</td>
        </tr>

        @if(!empty($blog['tags']))

            <tr>
                <th>کلمات کلیدی</th>
                <td>
                    @foreach($blog['tags'] as $item)
                        <span class="label label-info m-l-1-5">
                            <i class="fa fa-hashtag fa-fw"></i>
                            {{ $item['title'] }}
                        </span>
                    @endforeach
                </td>
            </tr>

        @endif


        <tr>
            <th>دسته بندی</th>
            <td>{{ $blog['category']['title'] }}</td>
        </tr>

        <tr>
            <th>تاریخ انتشار</th>
            <td>{{ $blog['publish_at_fa'] }}</td>
        </tr>

        <tr>
            <th>تاریخ ایجاد</th>
            <td>{{ $blog['created_at'] }}</td>
        </tr>

        <tr>
            <th>تاریخ ویرایش</th>
            <td>{{ $blog['updated_at'] }}</td>
        </tr>

        </tbody>
    </table>

@stop

@section('helper_block')

    <div class="form-group helper-block">

        <div class="pull-left">
            {{ Breadcrumbs::render('blog-show', $blog) }}
        </div>

        <div class="text-right">
            <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-info">ویرایش</a>
        </div>

    </div>

@stop