@extends('layouts.userLayout')

@section('title', 'CLUBS')
 <style>
    @font-face {
    font-family: "compus";
    src: url("../../fonts/campus/CAMPUS\ PERSONAL\ USE.ttf");
}
    @font-face {
    font-family: "poppins";
    src: url('../../fonts/Poppins/Poppins-Regular.ttf');
}
@font-face {
    font-family: 'coolvetica';
    src: url('../fonts/coolvetica/coolvetica\ rg.otf');
}
    #titreaffich{
        font-family: "compus",sans-serif;
        font-size: 4em;
        color: wheat;
    }
    #bannerafich{
        background-image:url('{{asset($club->photo)}}');
        background-size: cover;
        background-repeat: no-repeat;
        height: 120vh;
    }
    #paraaffich{
        font-family: 'poppins' , sans-serif;
        font-size: 1.5em;
        margin-top: 40px;
        color: white;
       
    }
    #divpara{
        padding: 10px 50px;
        background-color: rgba(0, 0, 0, 0.61);
        width: 60vw;
    }
    #linkemail:hover{
        text-decoration: none;

    }
 </style>
@section('content')

    
        <div id="bannerafich" class="p-3">
           
           <div id="divpara">
            <h2 id="titreaffich">{{$club->nom}}</h2>
            <p id="paraaffich">Pour être toujours proche de vous, notre club <span>{{$club->nom}}</span> vous propose de vivre le haut de gamme du fitness en plein coeur de Casablanca. Des installations ultramodernes, les meilleurs entraîneurs de Casablanca et, pour la première fois, une piscine distincte dédiée aux athlètes.</p>
            <div class="mt-5">
                <span id="paraaffich">Adresse : {{$club->adresse}}</span><br>
                <span id="paraaffich" >Email : <a id="linkemail" href="">{{$club->email}}</a></span><br>
                <span id="paraaffich">Téléphone : {{$club->telephone}}</span>
            </div>
            
           </div>
        </div>
        
    
    
@endsection