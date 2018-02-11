@extends('_layouts.admin.index')

@section('content')

    <form action="{{ route('admin.user.permission.update', $user['id']) }}" method="post" id="form">
        {{ method_field('put') }}

        <div class="jumbotron">

            <h4 class="text-primary m-b-3">لطفا دسترسی های <span>»» {{ $user->fullName() }} ««</span> را مشخص نمایید.</h4>

            <div class="row">
                @foreach($permissionTitles as $title)
                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <h5 class="m-b-2 m-t-2">
                                <i class="fa fa-hashtag fa-fw text-warning"></i>
                                <strong>{{ $title['title'] }}</strong>
                            </h5>
                            @foreach($title['permissions'] as $permission)
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="permissions[]" value="{{ $permission['id'] }}" {{ in_array($permission['id'], $userPermissions) === true ? 'checked' : '' }}>
                                        {{ $permission['display_name'] }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
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
            {{ Breadcrumbs::render('user-edit-permission', $user) }}
        </div>

        <div class="text-right">
            <button type="button" class="btn btn-info btn-ajax">ذخیره</button>
        </div>

    </div>

@stop