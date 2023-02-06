@extends('layouts.adminLayout')

@section('title', 'Add Club')

@section('content')

<section>
    <div class="content bg-white  mx-5 mb-5 px-0 pt-0 pb-0" id="rl">
        <div class="row">
            
            <div class="col-5 " >
                <img src="{{ asset('img/photos/clubs.jpg') }}" alt="" width="100%"  class="picside">
            </div>
            <div class="col-6 " >
                <h1 class="mb-5 ms-4 pt-3 pb-0"> Add Club</h1>
                <form method="POST" action="{{ route('clubs.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group-lg mb-3">
                        <input type="text" class="form-control mx-4 my-4" id="inputGroupFile01" placeholder="Nom" name="nom">
                    </div>
                    <div class="input-group-lg mb-3">
                        <input type="text" class="form-control mx-4 my-4" id="inputGroupFile01" placeholder="Adresse" name="adresse">
                    </div>
                    <div class="row ">

                    
                    <div class="col-6 input-group-lg mb-3">
                        <input type="text" class="form-control mx-4" id="inputGroupFile01" placeholder="Telephone" name="telephone">
                    </div>

                    <div class="col-6 input-group-lg mb-3">
                        <input type="email" class="form-control mx-4" id="inputGroupFile01" placeholder="Email" name="email">
                    </div>

                    </div>
                    <div class="input-group-lg mb-3">
                        <input type="file" class="form-control mx-4 my-2" id="inputGroupFile01" placeholder="Photo" name="photo">
                    </div>
                    
                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-success mx-4">Add</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection