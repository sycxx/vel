<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.1.0/css/all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.fancybox.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.min.css')}}"/>


    <title>VMI</title>
</head>
<body>
    @include('inc.elenav')
        
        @yield('content')
        
</body>
</html>