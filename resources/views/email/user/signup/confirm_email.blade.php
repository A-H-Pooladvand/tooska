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

        form {
            text-align: center;
        }

        button {
            background: #23d160;
            border: 1px solid #1fbb56;
            padding: 1rem;
            color: white;
            border-radius: 4px;
            cursor: pointer;
            font-family: sans-serif;
        }
    </style>
</head>
<body>

<h1>سلام {{ $user->name . ' ' . $user->family }}</h1>
<p>با تشکر از ثبت نام شما. شما میتوانید از طریق لینک زیر حساب کاربری خود را فعال نمایید.</p>
<form action="{{ route('user.confirm.confirm', encrypt($user->id)) }}" method="POST">
    <input type="hidden" name="_token" value="{{ $token }}">

    <button type="submit">فعال سازی حساب کاربری</button>
</form>

</body>
</html>