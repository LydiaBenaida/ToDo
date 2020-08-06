<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="base" >
    <nav class="navbar navbar-expand-lg ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" style="font-weight: bold;font-size: 25px;color: white">ToDo
                <img style="width: 50px; padding-top: 0px;position: relative" src=".././img/school.png"> </a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color: white;font-size: 15px">Home <span class="sr-only">(current)</span></a>
                </li>

            </ul>
            @if (Auth::check())
                <p style="color: white;margin-right: 1%;margin-top: 1%" >{{Auth::user()->name}}</p>

                <form action="{{route('logout')}} " method="POST">
                    @csrf

                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">logout</button>
                </form>
            @endif
        </div>
    </nav>
    <main class="">
        @yield('content')
    </main>
</div>
</body>
<footer class="fixed-bottom">
    <nav class="navbar justify-content-center d-flex ">


        <h6 class="pr-2 pt-1" style="color: white">Contact Us </h6>


        <img src="../img/facebook.png" class="img-footer pr-2  " alt="">
        <img src="../img/gmail.png" class="img-footer pr-2 " alt="">
    </nav>
</footer>
</html>
