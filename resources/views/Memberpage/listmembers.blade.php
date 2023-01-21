@extends('layouts.adminLayout')
@section('title' , 'List Members')

<head>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">List Members</h1>


    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Picture</th>
                        
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ($members as $member)
                        <tr>
                            <td>{{ $member->id }}</td>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->email }}</td>
                            <td>{{ $member->role }}</td>
                            
                            
                            @if ($member->photo !== null)
                                <td><img src="{{ asset($member->photo) }}" alt="{{ $member->name }}" width="50px">
                                </td>
                            @else
                                <td><img src="{{ asset('storage/images/users/user.png') }}"
                                        alt="{{ $member->name }}" width="50px"></td>
                            @endif

                            <td>
                                <button type="button"
                                    class="btn btn-sm btn-success mx-1 fs-5" data-bs-toggle="modal" data-bs-target="#edit{{$member->id}}"> <i class="bx bx-pencil"></i> </button>

                               
                                    
                                    <div class="modal fade" id="edit{{$member->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title text-dark" id="exampleModalLabel">Edit Member</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{ route('members.update', ['member' => $member->id]) }}" enctype="multipart/form-data">
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
                                                        @enderror form-control form-control-lg" value="  {{ old('name', $member->name) }}"/>
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
                                                        @enderror form-control form-control-lg" value="  {{ old('email', $member->email) }}" />
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
                                                        @enderror form-control form-control-lg" value="  {{ old('role', $member->role) }}"/>
                                                            <label class="form-label" for="role" >Role</label>
                                                          </div>
                                                    </div>  
                                                    <div class="col-lg-6">
                                                        <div class="form-outline mb-4">
                                                          @error('password')
                                                          <div class="alert alert-danger">{{$message}}</div>
                                                        @enderror
                                                            <input type="password" id="password" name="password" class="@error('password')
                                                            is-invalid
                                                        @enderror form-control form-control-lg" value="  {{ old('password', $member->password) }}"/>
                                                            <label class="form-label" for="password" >password</label>
                                                          </div>
                                                    </div>  
                                                 
                        
                                                    <div class="col-12">
                                                        <div class="form-outline mb-4">
                                                            <input type="file" id="photo" name="photo" class="form-control form-control-lg" accept="image/*" value="  {{ old('photo', $member->photo) }}"/>
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
                                                        @enderror form-control form-control-lg" value="  {{ old('telephone', $member->telephone) }}"/>
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
                                                    @enderror form-control form-control-lg" value="  {{ old('sport', $member->sport) }}" id="floatingSelectGrid" aria-placeholder="Sport" name="sport">
                                                            <option selected>Sport</option>
                                                            <option value="1">Musculation</option>
                                                            <option value="2">Boxing</option>
                                                            <option value="3">Crossfit</option>
                                                            <option value="4">Aerobic</option>
                                                            <option value="5">Natation</option>
                                                            <option value="6">Yoga</option>
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
                                      <form class="d-inline" action="{{ route('members.destroy', ['member' => $member->id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger mx-1"> <i
                                                class="bx bx-trash fs-5"></i>
                                        </button>   
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