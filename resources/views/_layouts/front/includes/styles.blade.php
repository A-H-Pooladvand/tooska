<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>@yield('title', config('app.name'))</title>
<meta name="description" content="@yield('description', 'توضیحات مختصر راجع به وبسایت')">
<link rel="stylesheet" href="{{ asset('css/front.css') }}">