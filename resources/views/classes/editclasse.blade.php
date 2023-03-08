@extends('layouts.adminLayout')

@section('title' , 'modifier ')

@section('content')

<body>
    <h2 class=" mb-4 text-white">Modifier classe</h2>
    <form action="{{ route('classes.update',$classe->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
        @csrf
        <div class="container">

        
        <div>
            <label for="titre">Titre</label>
            <input class="form-control w-50" type="text" id="titre" name="titre" value="{{old('titre',$classe->titre)}}">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea class="form-control w-50" type="text" id="description" cols="10" rows="5" name="description">{{old('titre',$classe->description)}}</textarea>
        </div>
        <div>
            <label for="photo">Photo</label>
            <input  class="form-control w-50" type="file" id="photo" name="photo">
        </div>
        <div>
            <label for="date">Date</label>
            <input class="form-control w-50" type="date" id="date" name="date" value="{{old('titre',$classe->date)}}">
        </div>
        <div>
            <label for="horaire">Horaire</label>
            <input class="form-control w-50" type="datetime" id="horaire" name="horaire" value="{{old('titre',$classe->horaire)}}">
        </div>
        
        
        
        
            

        <button class="btn btn-primary mt-3" type="submit">Modifier</button>
    </div>
    </form>
</body>

@endsection