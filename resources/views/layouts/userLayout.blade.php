<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GoldGym | @yield('title')</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="img/icons/G.png" type="image/x-icon">
    <link href="{{ asset('css/nav.style.css') }}" rel="stylesheet">
    
    
</head>
<body>
    <nav>
        <div class="row d-flex ">
        <!-- When there is no desire, all things are at peace. - Laozi -->
            <div class="col-lg-2 logo">
                <img src="{{ asset('img/logo/logogold.png') }}" alt="logo" width="100%">
            </div>
            <div class="col-lg-7">
                <ul class="list">
                    <li><a href="{{ route('welcomehome') }}">Accueil</a></li>
                    <li><a href="#myslidersec">Clubs</a></li>
                    <li><a href="#sec">Activités</a></li>
                    <li><a href="#secab">Abonnements</a></li>
                    
                    <li><a href="#secabout">About</a></li>
                    <li><a href="#contactsec">Contact</a></li>
                </ul>
            </div>
            <div class="col drop">
                
                    
                    @auth
                    {{-- <div class="col-3 btns">
                        <a href="{{route('logout')}}"><button class="btn btn-danger text-white ">Log out</button></a>
                    </div> --}}
                        <div >
                            <button class="out"><a class="dropdown-item" href="{{route('logout')}}">Log out</a></button>
                            <button class="out"><a class="dropdown-item" href="{{route('adminpage.adminhome')}}">Dashboard</a></button>
                        </div>
                        
                        
                    
                    @endauth
                    @guest
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        REJOIGNEZ NOUS
                       </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{route('view.register')}}">Sign up</a></li>
                            <li><a class="dropdown-item" href="{{route('view.login')}}">Log in</a></li>
                        </ul>
                    @endguest
                    
                  
            </div>
        </div>
    </nav>
    <script src="{{ asset('js/app.js') }}"></script>

    <main>
       @yield('content') 
    </main>
    
</body>

</html>