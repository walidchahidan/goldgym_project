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




<div class="container pt-5" id="cont">
    
    <div class="row">
        @foreach ($classes as $classe)
        <div class="col-4">
            <div class="card" id="card">
                <img src="{{asset('storage/images/'.$classe->photo)}}" alt="{{$classe->titre}}" style="height: 200px">
                <div class="card-body" style="height: 250px">
                    <h3>{{$classe->titre}}</h3>
                    <p>{{$classe->description}}</p>
                    <a href="" class="btn btn-primary" id="btncard">Details</a>
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
                    <p>La boxe, notamment la ?? boxe anglaise ?? r??glement??e de mani??re moderne, est un sport de combat pratiqu?? depuis le XVIII??? si??cle ?? un contre un, qui recourt ?? des frappes de percussion ?? l'aide de gants matelass??s</p>
                    <a href="" class="btn btn-primary" id="btncard">Details</a>
                </div>
            </div>

        </div>

        <div class="col-4">
            <div class="card" id="card">
                <img src="/img/photos/swim.jpg" alt="box" style="height: 200px">
                <div class="card-body" style="height: 250px">
                    <h3>Natation</h3>
                    <p>Sport individuel et collectif (dans le cas des relais), la natation consiste ?? parcourir le plus vite possible une distance ?? la nage dans une piscine homologu??e. La natation englobe ??galement les ??preuves de plongeon ainsi que la natation synchronis??e, qui s'inspire des ballets aquatiques.</p>
                    <a href="" class="btn btn-primary" id="btncard">Details</a>
                </div>
            </div>

        </div>

        <div class="col-4">
            <div class="card" id="card">
                <img src="/img/photos/musculation.jpg" alt="box" style="height: 200px">
                <div class="card-body" style="height: 250px">
                    <h3>Musculation</h3>
                    <p>La musculation est un ensemble d'exercices physiques visant au d??veloppement des muscles squelettiques, afin d'acqu??rir plus de force, d'endurance, de puissance, d'explosivit?? ou de volume musculaire.</p>
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
                    <p>Le CrossFit est une marque commerciale d'entra??nement crois?? promu par la soci??t?? CrossFit Inc. Dans le langage courant, le terme CrossFit est assimil?? ?? la pratique sportive pluridisciplinaire suivant les principes ??nonc??s par la marque ??ponyme.</p>
                    <a href="" class="btn btn-primary" id="btncard">Details</a>
                </div>
            </div>

        </div>

        <div class="col-4">
            <div class="card" id="card">
                <img src="/img/photos/yoga.jpg" alt="box" style="height: 200px">
                <div class="card-body" style="height: 250px">
                    <h3>Yoga</h3>
                    <p>Le yoga est la pratique d'un ensemble de postures et d 'exercices de respiration qui vise ?? apporter un bien ??tre physique et mental. cet ancien art de vivre tel qu'il est expliqu?? dans les textes se r??v??le comme un chemin initiatique qui transcende la discipline physique.</p>
                    <a href="" class="btn btn-primary" id="btncard">Details</a>
                </div>
            </div>

        </div>

        <div class="col-4">
            <div class="card" id="card">
                <img src="/img/photos/dance.jpg" alt="box" style="height: 200px">
                <div class="card-body" style="height: 250px">
                    <h3>Dancing</h3>
                    <p>La danse est une forme d'art vivant. C'est un mode d'expression ??ph??m??re constitu?? de s??quences de mouvements de corps dans l'espace souvent accompagn??s par de la musique. Les mouvements sont ?? dessein, intentionnellement rythmiques et fa??onn??s culturellement</p>
                    <a href="" class="btn btn-primary" id="btncard">Details</a>
                </div>
            </div>

        </div>
    </div> 
    
  

   
</div> --}}


</section>