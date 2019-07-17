<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name','jancuk')}}</title>    
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
        @yield('content')
        </div>

        

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/6.3.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#reserved-urls -->

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>
    </body>
</html>
