<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
</head>
<body>
<h1><?=$body?></h1>
<p>Hello, {{ $name }}</p>
{{-- Hiển thị nội dung --}}
<p>Hello, {!! $name !!}</p>
{{-- Hiển thị nội dung có kèm thẻ của html --}}
</body>
</html>