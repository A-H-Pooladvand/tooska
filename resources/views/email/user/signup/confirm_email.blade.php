<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>خوش آمدید</title>
    <style>
        body {
            font-family: sans-serif;
        }

        * {
            text-align: right;
        }

        form {
            text-align: center;
        }
    </style>
</head>
<body>

<h1>سلام {{ $user->name . ' ' . $user->family }}</h1>
<p>با تشکر از ثبت نام شما. شما میتوانید از طریق لینک زیر حساب کاربری خود را فعال نمایید.</p>
<a href="{{ route('user.confirm.confirm', [encrypt($user->id), $user->token]) }}">{{ route('user.confirm.confirm', [encrypt($user->id), $user->token]) }}</a>

</body>
</html>