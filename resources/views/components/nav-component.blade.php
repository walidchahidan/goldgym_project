
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
                <li><a href="">Activités</a></li>
                <li><a href="">Abonnements</a></li>
                <li><a href="">Nutrition</a></li>
                <li><a href="#secabout">About</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </div>
        <div class="col drop">
            
                
                @auth
                {{-- <div class="col-3 btns">
                    <a href="{{route('logout')}}"><button class="btn btn-danger text-white ">Log out</button></a>
                </div> --}}
                    <div >
                        <button class="out"><a class="dropdown-item" href="{{route('logout')}}">Log out</a></button>
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