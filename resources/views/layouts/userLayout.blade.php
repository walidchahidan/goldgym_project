<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GoldGym | @yield('title')</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="shortcut icon" href="img/icons/G.png" type="image/x-icon">
    <link href="{{ asset('css/userlayout.style.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="d-flex justify-content-center gap-5">
        <div class="row all">
        <div class="logo col">
            
            <a href=""><img class="GG" src="img/logo/G-removebg.png" alt="GG"></a>
        </div>
        <div class="lists col">
            <ul class="d-flex gap-4">
                <li><a href="#" >Accueil</a></li>
                <li><a href="#" >Clubs</a></li>
                <li><a href="#" >Abonnements</a></li>
                <li><a href="#" >Contacts</a></li>
            </ul>
        </div>
        <div class="col btns">
           <a href="{{route('view.register')}}"><button class="btn btn-primary signupnav">Sign up</button></a> 
            <a href="{{route('view.login')}}"><button class="btn btn-success signinnav">Sign in</button></a>
        </div>
    </div>
  </nav>

    <main>
       @yield('content') 
    </main>
    
</body>
</html>