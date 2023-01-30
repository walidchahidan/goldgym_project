@extends('layouts.adminLayout')

@section('title','Add Member')

<link rel="stylesheet" href="{{asset('css/admin/admin.style.css')}}">

@section('content')
    
<section>
    <div class="content bg-white  mx-5 mb-5 px-0 pt-0 pb-0" id="rl">
        <div class="row">
            
            <div class="col-4 " >
                <img src="{{ asset('img/photos/addphoto.jpg') }}" alt="" width="100%"  class="picside">
            </div>
            <div class="col-6 " >
                <h1 class="mb-5 ms-4 pt-3 pb-0"> Add Member</h1>
                <form method="POST" action="{{ route('members.store') }}" enctype="multipart/form-data">
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
                        
                            <select class="form-select mx-4" id="floatingSelectGrid" name="role">
                              <option selected value="1">Adherent</option>
                              <option value="2">Admin</option>
                              <option value="3">Assistant</option>
                              <option value="4">Coach</option>
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
                    <button type="submit" class="btn btn-success mx-4">Add</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection