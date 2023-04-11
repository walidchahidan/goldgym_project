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
    <style>
        @media screen and (max-width:700px){
            .imglogo{
                width: 100% !important;
            }
            .slideall{
                width: 100%;
            }
            .btndivrn{
                width: auto;
            }
            .list{
                font-size: 0.9em;
                gap: 15px;
                padding-left: 5px;
            }
            #welcometo{
                text-align: center;
            }
            #paragraphbanner{
                width: 100% !important;
                text-align: center;
            }
            #about{
                
                font-size: 1.5em !important;
                margin-top: 50px !important;
            }
            .paragraphclubs{
                padding: 0px 20px !important;
            }
            #paraabonnements{
                padding: 10px 20px !important;
            }
            .goldimg {
                text-align: center !important;
            }
            .silverimg{
                text-align: center !important;

            }
            .infoabonements{
                width: auto !important;
                margin-top: 20px !important;
            }
            #divpara{
                width: 90vw !important;
                height: 130vh !important;
            }
            #bannerafich{
                height: 140vh;
            }
            /* #frm{
                width: 140% !important;
            } */
        }
    </style>
    
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        {{-- <div class="row d-flex justify-content-between"> --}}
        <!-- When there is no desire, all things are at peace. - Laozi -->
            <div class="col-lg-2 logo">
                <a href="{{route("welcomehome")}}"><img class="imglogo" src="{{ asset('img/logo/logogold.png') }}" alt="logo" width="200px"></a>
            </div>
            <div class="listnav col-lg-7">
                <ul class="list">
                    <li><a href="{{ route('welcomehome') }}">Accueil</a></li>
                    <li><a href="#myslidersec">Clubs</a></li>
                    <li><a href="{{ route('welcomehome') }}/#sec">Activités</a></li>
                    <li><a href="{{ route('welcomehome') }}/#secab">Abonnements</a></li>
                    
                    <li><a href="{{ route('welcomehome') }}/#secabout">About</a></li>
                    <li><a href="{{ route('welcomehome') }}/#contactsec">Contact</a></li>
                </ul>
            </div>
            <div class="btndivrn col-3 drop">
                
                    
                    @auth
                    {{-- <div class="col-3 btns">
                        <a href="{{route('logout')}}"><button class="btn btn-danger text-white ">Log out</button></a>
                    </div> --}}
                        <div>
                            <button class="out"><a class="dropdown-item" href="{{route('logout')}}">Log out</a></button>
                            @if ((Auth::user()->role === 'Admin' || Auth::user()->role === 'Assistant'))
                                <button class="out"><a class="dropdown-item" href="{{route('adminpage.adminhome')}}">Dashboard</a></button>
                            @endif
                            
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
        {{-- </div> --}}
    </nav>
    <script src="{{ asset('js/app.js') }}"></script>

    <main>
       @yield('content') 
    </main>
    
</body>

</html>