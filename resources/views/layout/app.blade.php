<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" type="image/svg" sizes="32x32" href="{{asset('public/imgs/Favicon.png')}}">
    <link rel="stylesheet" href="{{asset('public/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/styles.css')}}">
    <script src="{{asset('public/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('public/js/vue.global.js')}}"></script>
</head>
<body>
@include('layout.navbar')
@yield('main')
@include('layout.footer')
</body>
</html>
