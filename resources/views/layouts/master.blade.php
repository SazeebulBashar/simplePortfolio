<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{url('https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Sacramento&display=swap')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/Style.css')}}">


</head>
<body>

    @include('components.navbar')

    @yield('content')

    @include('components.footer') 
 

    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
</body>
</html>