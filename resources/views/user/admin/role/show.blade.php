@extends('_layouts.admin.index')


@section('content')

    <h1>{{ $role['name'] }}</h1>
    <h2>{{ $role['display_name'] }}</h2>
    <p>{{ $role['description'] }}</p>

    <h3>
        <strong>دسترسی ها</strong>
    </h3>
    <hr>
    <ul class="list-group">
        @foreach($permissions as $i => $permission)
            <li>
                <div class="checkbox">
                    <label>
                        <input @if(in_array($permission['id'], $role_permissions)) checked @endif type="checkbox" value="{{ $permission['id'] }}" name="permission[]">
                        <span>{{ $permission['display_name'] }}</span>
                    </label>
                </div>
            </li>
        @endforeach
    </ul>

@stop