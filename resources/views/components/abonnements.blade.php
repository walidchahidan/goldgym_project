<style>
       @font-face {
    font-family: "poppins";
    src: url('../../fonts/Poppins/Poppins-Regular.ttf');
}
@font-face {
    font-family: 'coolvetica';
    src: url('../fonts/coolvetica/coolvetica\ rg.otf');
}
    #headerabonnements{
        text-align: center;
        padding-top: 40px;
    }
    #secab{
        background-color: #796305;
    }
    #paraabonnements{
        color: white;
        padding: 10px 150px;
        font-family: 'coolvetica' sans-serif;
    }
    #abcardgold{
        padding: 20px;
        border-radius: 20px;
        padding-bottom: 40px;
        
    }
    #abcardsilver{
        padding: 20px;
        border-radius: 20px;
        padding-bottom: 40px;
       
    }
    #goldbtn{
        background-color: #796305;
        border: none;
    }
    #silverbtn{
        background-color: rgb(102, 97, 97);
        border: none;
    }
    #silverbtn:hover{
        background-color: black;
    }
    #goldbtn:hover{
        background-color: black;
    }
    #h2{
        font-family: 'poppins' , sans-serif;
        font-weight: bold;
    }

</style>
<section id="secab">
    <div id="headerabonnements" >
        <h1 class="text-white">Abonnements</h1>
        <p id="paraabonnements">Choisir votre abonnements maintenant , et bénificier de beaucoup d'avantages selon votre confort </p>
    </div>
    
    
    <div class="container pt-4 pb-5">
        <div class="card" id="abcardgold">
        <div class="row">
            <div class="goldimg col-lg-4">
                <img src="{{asset('/img/photos/goldmember.jpg')}}" alt="">
            </div>
            <div class="infoabonements col-7">
                <h2 id="h2" class="pb-5">GOLD MEMBER</h2>
                <h5>Profiter de beaucoup chose avec l'abonnemet gold</h5>
                {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo adipisci quod molestias at placeat alias, explicabo numquam doloribus sit rem dolore ea officiis voluptatum, laboriosam corrupti vitae. Quibusdam, vel quia explicabo numquam doloribus sit rem dolore ea officiis voluptatum, laboriosam corrupti vitae. Quibusdam, vel quia.</p> --}}
                <ul>
                    <li>Accès local</li>
                    <li>Accès multiclubs</li>
                    <li>Accès aux cités des sports</li>
                    <li>Accès à toutes les activités du club</li>
                    <li>Assurance santé</li>
                    <li>Garantie Covid-Fitness</li>
                    <li>Accès aux cours VIRTUAL TRAINING</li>
                    <li>10 Séances de Coaching</li>
                    <li>Bilan Medico-sportif</li>
                    <li>2 Consultations chez un medecin</li>
                </ul>
                <a href="{{route('joins.create')}}" id="goldbtn" class="btn btn-primary">Participer</a>
            </div>
            
        </div>

    </div>

    <div class="card" id="abcardsilver">
        <div class="row">
            <div class="silverimg col-lg-4">
                <img src="{{asset('/img/photos/silvermember.jpg')}}" width="210px" class="ps-4 pt-4" alt="">
            </div>
            <div class="infoabonements col-7">
                <h2 id="h2" class="pb-5">SILVER MEMBER</h2>
                <h5>Profiter de beaucoup chose avec l'abonnemet silver</h5>
                <ul>
                    <li>Accès local</li>
                    <li>Accès multiclubs</li>
                    <li>Accès aux cités des sports</li>
                    <li>Accès à toutes les activités du club</li>
                    <li>Assurance santé</li>
                    <li>Garantie Covid-Fitness</li>
                    <li>Accès aux cours VIRTUAL TRAINING</li>
                    
                </ul>
                <a href="{{route('joins.create')}}" id="silverbtn" class="btn btn-primary">Participer</a>
            </div>
            
        </div>

    </div>

</div>
</section>