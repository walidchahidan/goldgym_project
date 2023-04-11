@extends('layouts.adminLayout')

@section('title' ,'Classes')


@section('content')

<div class="d-flex justify-content-between">
    <h1 class="h3 mb-3 text-white">List des clubs</h1>
    <button class="btn btn-success"><a class="text-white text-decoration-none" href="{{route('classes.create')}}">Add Classe</a></button>
</div>



<div class="card-body">
    <div class="table-responsive">
        <table class="table" style="color: wheat">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                   
                    <th scope="col">Photo</th>
                    <th scope="col">Date</th>
                    
                    
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classes as $classe)
                <tr>
                    <td>{{ $classe->id }}</td>
                    <td>{{ $classe->titre }}</td>
                    
                   
                  
                   
                    
                   
                                <td><img src="{{asset('storage/images/'.$classe->photo)}}" alt="{{ $classe->titre }}" width="50px">
                                </td>
                            
                   
                    

                    <td>{{ $classe->date }}</td>
                    <td >
                        <a href="{{route('classes.edit',$classe->id)}}" class="btn btn-success"><i class="bx bx-pencil"></i></a>
                        @if (Auth::user()->role === 'Admin')
                            <a href="" class="btn btn-danger"><i class="bx bx-trash"></i></a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection