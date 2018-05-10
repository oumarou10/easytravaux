<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ page_title($title ?? '') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>
<div class="global">
    @include('layout.img')
    @include('layout._nav')
    @yield('content')
    @include('flashy::message')
    @include('layout.footer')
</div>
</body>
</html>