@extends('layouts.adminLayout')

@section('title' , 'add classe')

@section('content')

<body>
    <h2 class=" mb-4 text-white">Ajouter classe</h2>
    <form action="{{ route('classes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">

        
        <div>
            <label for="titre">Titre</label>
            <input class="form-control w-50" type="text" id="titre" name="titre">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea class="form-control w-50" type="text" id="description" cols="10" rows="5" name="description"></textarea>
        </div>
        <div>
            <label for="photo">Photo</label>
            <input  class="form-control w-50" type="file" id="photo" name="photo">
        </div>
        <div>
            <label for="date">Date</label>
            <input class="form-control w-50" type="date" id="date" name="date">
        </div>
        <div>
            <label for="horaire">Horaire</label>
            <input class="form-control w-50" type="datetime" id="horaire" name="horaire">
        </div>
        
        
        
        
            

        <button class="btn btn-primary mt-3" type="submit">Ajouter</button>
    </div>
    </form>
</body>

@endsection