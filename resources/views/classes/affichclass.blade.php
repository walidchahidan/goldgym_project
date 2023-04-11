@extends('layouts.userLayout')

@section('title', 'CLASSES')
<style>
     @font-face {
    font-family: "poppins";
    src: url('../../fonts/Poppins/Poppins-Regular.ttf');
}
@font-face {
    font-family: 'coolvetica';
    src: url('../fonts/coolvetica/coolvetica\ rg.otf');
}
    body{
        background-image: url('../../img/photos/wallgym.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }
    #btnclass{
        background-color: #977E0E;
        border: none;
        margin-top: 70px;
        margin-bottom: 40px;
    }
    #btnclass:hover{
        
        background-color: black;
        color: white;
        border: none;
    }
    #contclass{
        background-color: white;
        
    }
    #headclass{
        padding-top: 70px;
        
    }
</style>
@section('content')

<section id="affichclasssec">
    <div class="container mt-5 pe-0" id="contclass">
        <div class="row">
            <div class="col-6 text-center" id="headclass">
                <h1 class="pb-4" style="font-family: 'coolvetica' , sans-serif;">{{$classe->titre}}</h1>
                <p class="fw-bold">{{$classe->description}}</p>
                <a href="{{route('welcomehome')}}/#sec" class="btn btn-primary fw-bold" id="btnclass">Classes</a>
            </div>
            <div class="col-6">
                <img src="{{asset('storage/images/'.$classe->photo)}}" alt="" width="100%" height="100%">
            </div>
        </div>
    </div>
</section>
    
@endsection