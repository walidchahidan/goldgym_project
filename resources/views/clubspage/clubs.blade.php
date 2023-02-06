@extends('layouts.adminLayout')

@section('title' ,'Clubs')
<head>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

@section('content')


<div class="container-fluid p-0">
    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>

    @endif
    <div class="d-flex justify-content-between">
        <h1 class="h3 mb-3 text-white">List des clubs</h1>
        <button class="btn btn-success"><a class="text-white text-decoration-none" href="{{route('clubs.create')}}">Add Club</a></button>
    </div>
    


    <div class="card-body">
        <div class="table-responsive">
            <table class="table" style="color: wheat">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Email</th>
                        
                        <th scope="col">Picture</th>
                        
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                  

                    @foreach ($clubs as $club)
                        <tr>
                            <td>{{ $club->id }}</td>
                            <td>{{ $club->nom }}</td>
                            <td>{{ $club->adresse }}</td>
                            <td>{{ $club->telephone }}</td>
                            <td>{{ $club->email}}</td>
                            
                            
                            
                            @if ($club->photo !== null)
                                <td><img src="{{ asset($club->photo) }}" alt="{{ $club->nom }}" width="50px" height="50px" class="rounded-circle">
                                </td>
                            @else
                                <td><img src="{{ asset('storage/images/clubs/user.png') }}"
                                        alt="{{ $club->nom }}" width="50px" ></td>
                            @endif

                            <td width='124px'>
                                <button type="button"
                                    class="btn btn-sm btn-success mx-1 fs-5" data-bs-toggle="modal" data-bs-target="#edit{{$club->id}}"> <i class="bx bx-pencil"></i> </button>

                                    <div class="modal fade" id="edit{{$club->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title text-dark" id="exampleModalLabel">Edit Club</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{ route('clubs.update', ['club' => $club->id]) }}" enctype="multipart/form-data">
                                                    @method('put')
                                                    @csrf
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-outline mb-4">
                                                          @error('nom')
                                                          <div class="alert alert-danger">{{$message}}</div>
                                                        @enderror
                                                            <input type="text" id="nom" name="nom" class="@error('nom')
                                                            is-invalid
                                                        @enderror form-control form-control-lg" value="  {{ old('nom', $club->nom) }}"/>
                                                            <label class="form-label" for="nom" >Nom</label>
                                                          </div>
                                                    </div>  

                                                    <div class="col-lg-6">
                                                        <div class="form-outline mb-4">
                                                          @error('adresse')
                                                          <div class="alert alert-danger">{{$message}}</div>
                                                        @enderror
                                                            <input type="text" id="adresse" name="adresse" class="@error('adresse')
                                                            is-invalid
                                                        @enderror form-control form-control-lg" value="  {{ old('adresse', $club->adresse) }}"/>
                                                            <label class="form-label" for="adresse" >Adresse</label>
                                                          </div>
                                                    </div>  

                                                    <div class="col-lg-6">
                                                        <div class="form-outline mb-4">
                                                          @error('telephone')
                                                          <div class="alert alert-danger">{{$message}}</div>
                                                        @enderror
                                                            <input type="text" id="telephone" name="telephone" class="@error('telephone')
                                                            is-invalid
                                                        @enderror form-control form-control-lg" value="  {{ old('telephone', $club->telephone) }}"/>
                                                            <label class="form-label" for="telephone" >Telephone</label>
                                                          </div>
                                                    </div>  

                                                    <div class="col-lg-6">
                                                        <div class="form-outline mb-4">
                                                          @error('email')
                                                          <div class="alert alert-danger">{{$message}}</div>
                                                        @enderror
                                                            <input type="email" id="email" name="email" class="@error('email')
                                                            is-invalid
                                                        @enderror form-control form-control-lg" value="  {{ old('email', $club->email) }}" />
                                                            <label class="form-label" for="email">Email address</label>
                                                          </div>
                                                    </div>
                                                   
                                                    
                                                 
                        
                                                    <div class="col-12">
                                                        <div class="form-outline mb-4">
                                                            <input type="file" id="photo" name="photo" class="form-control form-control-lg" accept="image/*" value="  {{ old('photo', $club->photo) }}"/>
                                                            <label class="form-label" for="picture">Profile Photo</label>
                                                          </div>
                                                    </div>     

                                                </div>

                                                <div class="modal-footer">
                                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                              <button type="submit" class="btn btn-success">Save Edition</button>
                                            </div>
                                            </form>


                                            </div>
                                            
                                          </div>
                                        </div>
                                      </div>
                                    
                                   
                                      <form class="d-inline" action="{{ route('clubs.destroy', ['club' => $club->id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                        @if (Auth::user()->role === 'Admin')
                                        <button type="submit" class="btn btn-sm btn-danger mx-1"> <i
                                                class="bx bx-trash fs-5"></i>
                                        </button>  
                                        @endif 
                                </form>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection