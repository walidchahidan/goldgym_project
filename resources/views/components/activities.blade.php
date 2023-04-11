<style>
    @font-face {
    font-family: "poppins";
    src: url('../../fonts/Poppins/Poppins-Regular.ttf');
}
@font-face {
    font-family: 'coolvetica';
    src: url('../fonts/coolvetica/coolvetica\ rg.otf');
}
    #sec{
        background-color: #0F0E09;
        padding-bottom: 80px;
    }
    #cont{
        
    }
    #paragraphclubss{
        color: white;
        padding: 10px 150px;
    }
    #btncard{
        background-color: #796305;
        border: none;
    }
    #btncard:hover{
        background-color: #0F0E09;
    }
    #card{
        border-radius: 20px;
    }
   
</style>

<section id="sec">
    
{{-- <div class="container">
    @foreach ($classes as $classe)
        
    
    <div class="card">
        <img src="{{asset('storage/images/'.$classe->photo)}}" alt="{{$classe->titre}}">
        <div class="card-body">
            <h3>{{$classe->titre}}</h3>
            <p>{{$classe->description}}</p>
            <a href="" class="btn btn-primary">View Classe</a>
        </div>
    </div>
    @endforeach
</div> --}}



<div class="clubstitlediv pt-5">
    <h1 class="titleclubs">Activités</h1>
    <P class="paragraphclubs text-white">Découvrir notre différentes activités , de différentes sports et activités selon vos besoin et votre gout.</P>
</div><br>
<div class="container pt-5" id="cont">
    
    <div class="row">
        @foreach ($classes as $classe)
        <div class="col-lg-4">
            <div class="card" id="card">
                <img src="{{asset('storage/images/'.$classe->photo)}}" alt="{{$classe->titre}}" style="height: 200px">
                <div class="card-body" style="height: 250px">
                    <h3>{{$classe->titre}}</h3>
                    <p>{{$classe->description}}</p>
                    <a href="{{route('affichclass',$classe->id)}}" class="btn btn-primary" id="btncard">Details</a>
                </div>
            </div>

        </div>
        @endforeach
    </div>
    
</div>












    
{{-- <div class="clubstitlediv pt-4">
    <h1 class="titleclubs" >Classes</h1>
    <P id="paragraphclubss">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit repellat enim eveniet voluptatibus animi neque accusantium possimus quasi architecto cumque dolores non blanditiis officiis eius sunt, magni sapiente recusandae dolorum!</P>
</div><br>
<div class="container pt-5" id="cont">
   
    <div class="row">
        <div class="col-4">
            <div class="card" id="card">
                <img src="/img/photos/box.jpg" alt="box" style="height: 200px">
                <div class="card-body" style="height: 250px">
                    <h3>Boxing</h3>
                    <p>La boxe, notamment la « boxe anglaise » règlementée de manière moderne, est un sport de combat pratiqué depuis le XVIIIᵉ siècle à un contre un, qui recourt à des frappes de percussion à l'aide de gants matelassés</p>
                    <a href="" class="btn btn-primary" id="btncard">Details</a>
                </div>
            </div>

        </div>

        <div class="col-4">
            <div class="card" id="card">
                <img src="/img/photos/swim.jpg" alt="box" style="height: 200px">
                <div class="card-body" style="height: 250px">
                    <h3>Natation</h3>
                    <p>Sport individuel et collectif (dans le cas des relais), la natation consiste à parcourir le plus vite possible une distance à la nage dans une piscine homologuée. La natation englobe également les épreuves de plongeon ainsi que la natation synchronisée, qui s'inspire des ballets aquatiques.</p>
                    <a href="" class="btn btn-primary" id="btncard">Details</a>
                </div>
            </div>

        </div>

        <div class="col-4">
            <div class="card" id="card">
                <img src="/img/photos/musculation.jpg" alt="box" style="height: 200px">
                <div class="card-body" style="height: 250px">
                    <h3>Musculation</h3>
                    <p>La musculation est un ensemble d'exercices physiques visant au développement des muscles squelettiques, afin d'acquérir plus de force, d'endurance, de puissance, d'explosivité ou de volume musculaire.</p>
                    <a href="" class="btn btn-primary" id="btncard">Details</a>
                </div>
            </div>

        </div>
    </div>    

    <div class="row">
        <div class="col-4">
            <div class="card" id="card">
                <img src="/img/photos/crossfit.jpg" alt="box" style="height: 200px">
                <div class="card-body" style="height: 250px">
                    <h3>Crossfit</h3>
                    <p>Le CrossFit est une marque commerciale d'entraînement croisé promu par la société CrossFit Inc. Dans le langage courant, le terme CrossFit est assimilé à la pratique sportive pluridisciplinaire suivant les principes énoncés par la marque éponyme.</p>
                    <a href="" class="btn btn-primary" id="btncard">Details</a>
                </div>
            </div>

        </div>

        <div class="col-4">
            <div class="card" id="card">
                <img src="/img/photos/yoga.jpg" alt="box" style="height: 200px">
                <div class="card-body" style="height: 250px">
                    <h3>Yoga</h3>
                    <p>Le yoga est la pratique d'un ensemble de postures et d 'exercices de respiration qui vise à apporter un bien être physique et mental. cet ancien art de vivre tel qu'il est expliqué dans les textes se révèle comme un chemin initiatique qui transcende la discipline physique.</p>
                    <a href="" class="btn btn-primary" id="btncard">Details</a>
                </div>
            </div>

        </div>

        <div class="col-4">
            <div class="card" id="card">
                <img src="/img/photos/dance.jpg" alt="box" style="height: 200px">
                <div class="card-body" style="height: 250px">
                    <h3>Dancing</h3>
                    <p>La danse est une forme d'art vivant. C'est un mode d'expression éphémère constitué de séquences de mouvements de corps dans l'espace souvent accompagnés par de la musique. Les mouvements sont à dessein, intentionnellement rythmiques et façonnés culturellement</p>
                    <a href="" class="btn btn-primary" id="btncard">Details</a>
                </div>
            </div>

        </div>
    </div> 
    
  

   
</div> --}}


</section>