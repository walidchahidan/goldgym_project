@extends('layouts.adminLayout')
@section('title' , 'Coachs')

<head>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    {{-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> --}}
</head>

@section('content')
<div class="container-fluid p-0">
  @if(session('success'))
  <div class="alert alert-success">
      {{session('success')}}
  </div>
  @endif
    <h1 class="text-white h3 mb-3">List des coachs</h1>


    <div class="card-body">
        <div class="table-responsive">
            <table class="table" style="color: wheat">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Sport</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Picture</th>
                        
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                  

                    @foreach ($coachs as $coach)
                        <tr>
                            <td>{{ $coach->id }}</td>
                            <td>{{ $coach->name }}</td>
                            <td>{{ $coach->email }}</td>
                            <td>{{ $coach->role }}</td>
                            <td>{{ $coach->sport }}</td>
                            <td>{{ $coach->telephone }}</td>
                            
                            
                            @if ($coach->photo !== null)
                                <td><img src="{{ asset($coach->photo) }}" alt="{{ $coach->name }}" width="50px" height="50px" class="rounded-circle">
                                </td>
                            @else
                                <td><img src="{{ asset('storage/images/coaches/user.png') }}"
                                        alt="{{ $coach->name }}" width="50px" ></td>
                            @endif

                            <td>
                                <button type="button"
                                    class="btn btn-sm btn-success mx-1 fs-5" data-bs-toggle="modal" data-bs-target="#edit{{$coach->id}}"> <i class="bx bx-pencil"></i> </button>

                               
                                    
                                    <div class="modal fade" id="edit{{$coach->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title text-dark" id="exampleModalLabel">Edit coach</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{ route('coachs.update', ['coach' => $coach->id]) }}" enctype="multipart/form-data">
                                                    @method('put')
                                                    @csrf
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-outline mb-4">
                                                          @error('name')
                                                          <div class="alert alert-danger">{{$message}}</div>
                                                        @enderror
                                                            <input type="text" id="name" name="name" class="@error('name')
                                                            is-invalid
                                                        @enderror form-control form-control-lg" value="  {{ old('name', $coach->name) }}"/>
                                                            <label class="form-label" for="name" >Name</label>
                                                          </div>
                                                    </div>  
                                                    <div class="col-lg-6">
                                                        <div class="form-outline mb-4">
                                                          @error('email')
                                                          <div class="alert alert-danger">{{$message}}</div>
                                                        @enderror
                                                            <input type="email" id="email" name="email" class="@error('email')
                                                            is-invalid
                                                        @enderror form-control form-control-lg" value="  {{ old('email', $coach->email) }}" />
                                                            <label class="form-label" for="email">Email address</label>
                                                          </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-outline mb-4">
                                                          @error('role')
                                                          <div class="alert alert-danger">{{$message}}</div>
                                                        @enderror
                                                            <input type="text" id="role" name="role" class="@error('role')
                                                            is-invalid
                                                        @enderror form-control form-control-lg" value="  {{ old('role', $coach->role) }}"/>
                                                            <label class="form-label" for="role" >Role</label>
                                                          </div>
                                                    </div>  
                                                   
                                                 
                        
                                                    <div class="col-12">
                                                        <div class="form-outline mb-4">
                                                            <input type="file" id="photo" name="photo" class="form-control form-control-lg" accept="image/*" value="  {{ old('photo', $coach->photo) }}"/>
                                                            <label class="form-label" for="picture">Profile Photo</label>
                                                          </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-outline mb-4">
                                                          @error('telephone')
                                                          <div class="alert alert-danger">{{$message}}</div>
                                                        @enderror
                                                            <input type="text" id="telephone" name="telephone" class="@error('telephone')
                                                            is-invalid
                                                        @enderror form-control form-control-lg" value="  {{ old('telephone', $coach->telephone) }}"/>
                                                            <label class="form-label" for="telephone" >Telphone</label>
                                                          </div>
                                                    </div> 

                                                    <div class="col-lg-6">
                                                        <div class="form-outline mb-4">
                                                          @error('sport')
                                                          <div class="alert alert-danger">{{$message}}</div>
                                                        @enderror
                                                        <select class="form-select @error('sport')
                                                        is-invalid 
                                                    @enderror form-control form-control-lg" value="  {{ old('sport', $coach->sport) }}" id="floatingSelectGrid" aria-placeholder="Sport" name="sport">
                                                      <option selected>Sport</option>
                                                      <option value="Musculation">Musculation</option>
                                                      <option value="Boxing">Boxing</option>
                                                      <option value="Crossfit">Crossfit</option>
                                                      <option value="Aerobic">Aerobic</option>
                                                      <option value="Natation">Natation</option>
                                                      <option value="Yoga">Yoga</option>
                                                          </select> 
                                                         
                                                            <label class="form-label" for="sport" >Sport</label>
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
                                      <form class="d-inline" action="{{ route('coachs.destroy', ['coach' => $coach->id]) }}"
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