<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <title>{{ page_title($title ?? '') }}</title>
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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