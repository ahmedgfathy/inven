<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="0;url={{ route('login') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            text-align: center;
            padding-top: 100px;
        }
    </style>
</head>
<body>
    <h1>جارٍ التحويل...</h1>
    <p>سيتم تحويلك إلى صفحة تسجيل الدخول.</p>
    <p>إذا لم يتم التحويل تلقائيًا، <a href="{{ route('login') }}">انقر هنا</a>.</p>
</body>
</html>
