@extends('layouts.userLayout')

@section('title', 'Participer')
<style>
    @font-face {
    font-family: 'coolvetica';
    src: url('../fonts/coolvetica/coolvetica\ rg.otf');
}
@font-face {
    font-family: "compus";
    src: url("../../fonts/campus/CAMPUS\ PERSONAL\ USE.ttf");
}
    #rejoignernous{
        font-family: 'compus' , sans-serif;
        font-size: 3em;
    }
    #addabonnementsec{
        background-image: url('../../img/photos/wallgym.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 120vh;
    }
    #btnrejoint{
        background-color: #796305;
        border: none;
        font-family: 'coolvetica' , sans-serif;
    }
    #btnrejoint:hover{
        background-color: black;
    }

</style>
@section('content')

<section id="addabonnementsec">
    <div class="content mx-5 mb-5 px-0 pt-0 pb-0" id="rl">
        <div class="row">
            
           
            <div class="col-6 " >
                <h1 class="mb-5 ms-4 pt-3 pb-0 text-center text-white" id="rejoignernous"> REJOIGNER NOUS</h1>
                <form method="POST" action="{{ route('joins.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group-lg mb-3">
                        <input type="text" class="form-control mx-4 my-4" id="inputGroupFile01" placeholder="Name" name="name">
                    </div>
                    <div class="input-group-lg mb-3">
                        <input type="email" class="form-control mx-4 my-4" id="inputGroupFile01" placeholder="Email" name="email">
                    </div>
                    <div class="row ">

                    
                    <div class="col-6 input-group-lg mb-3">
                        <input type="password" class="form-control mx-4" id="inputGroupFile01" placeholder="Password" name="password">
                    </div>
                    <div class="input-group-lg mb-3 col-6 ">
                        
                            <select class="form-select mx-4" id="abonnement_id" name="abonnement_id" placeholder="type abonnement">  
                                <option value="1">Gold</option>
                                <option value="2">Silver</option>
                            </select>  
                    </div>
                    </div>
                    <div class="input-group-lg mb-3">
                        <input type="file" class="form-control mx-4 my-2" id="inputGroupFile01" placeholder="Photo" name="photo">
                    </div>
                    <div class="input-group-lg mb-3">
                        <input type="text" class="form-control mx-4 my-4" id="inputGroupFile01" placeholder="Téléphone" name="telephone">
                    </div>
                    <div class="input-group-lg mb-3" >
                        
                        <select class="form-select mx-4 my-4" id="floatingSelectGrid" aria-placeholder="Sport" name="sport">
                          <option selected>Sport</option>
                          <option value="Musculation">Musculation</option>
                          <option value="Boxing">Boxing</option>
                          <option value="Crossfit">Crossfit</option>
                          <option value="Aerobic">Aerobic</option>
                          <option value="Natation">Natation</option>
                          <option value="Yoga">Yoga</option>
                        </select>     
                </div>
                <div class="mb-3">
                    <button id="btnrejoint" type="submit" class="btn btn-success mx-4">Rejoint</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</section>

@endsection