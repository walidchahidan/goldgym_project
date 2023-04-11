<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/accueil/clubsslider.style.css') }}">
    {{-- swiper css --}}
    <link rel="stylesheet" href="{{ asset('css/accueil/swiper-bundle.min.css') }}">
  
</head>
<body>
    
<section id="myslidersec">
<div class="slideall">
<div class="clubstitlediv">
    <h1 class="titleclubs">Clubs</h1>
    <P class="paragraphclubs text-white">Depuis la zone majestueuse du Morocco Mall jusqu’au magnifique quartier d’affaires de la Marina, découvrez nos prestigieux clubs de remise en forme, de détente et de bien-être, conçus pour répondre aux besoins de chacun. Plus qu’un club de sports, Passage Fitness est un art de vivre.</P>
</div>
<br>



<div class="slide-container swiper">
    <div class="slide-content">
        
        <div class="card-wrapper swiper-wrapper">
            @foreach ($clubs as $club )
                
            
            <div class="card swiper-slide" id="slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="{{ $club->photo}}" alt="{{$club->nom}}" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">{{$club->nom}}</h2>
                    <p class="description">Pour être toujours proche de vous, notre club {{$club->nom}} vous propose de vivre le haut de gamme du fitness en plein coeur de Casablanca. Des installations ultramodernes, les meilleurs entraîneurs de Casablanca et, pour la première fois, une piscine distincte dédiée aux athlètes.</p>

                    
                    <a class="button" href="{{route('affichclub',$club->id)}}">Infos</a>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
</div>










{{-- <div class="slide-container swiper">
    <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide" id="slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="{{ asset('img/photos/club1.jpg') }}" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Marina club</h2>
                    <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                    <button class="button">View More</button>
                </div>
            </div>
            <div class="card swiper-slide" id="slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="{{ asset('img/photos/club2.jpg') }}" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Oulfa Club</h2>
                    <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                    <button class="button">View More</button>
                </div>
            </div>
            <div class="card swiper-slide" id="slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="{{ asset('img/photos/Club3.jpg') }}" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Medina Club</h2>
                    <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                    <button class="button">View More</button>
                </div>
            </div>
            <div class="card swiper-slide" id="slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="{{ asset('img/photos/club4.jpg') }}" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Mohammadia Club</h2>
                    <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                    <button class="button">View More</button>
                </div>
            </div>
        </div>
        
    </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
</div> --}}
</div>      
</section>
</body>


 {{-- swipper js --}}
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>

{{--script file --}}
<script src="{{ asset('js/script.js') }}"></script> 

</html>