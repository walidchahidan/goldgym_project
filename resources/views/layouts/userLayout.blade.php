<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GoldGym | @yield('title')</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="img/icons/G.png" type="image/x-icon">
    <link href="{{ asset('css/userlayout.style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/accueil/accueil.style.css') }}">
</head>
<body>
    <x-nav-component/>

    <main>
       @yield('content') 
    </main>
    
</body>
</html>