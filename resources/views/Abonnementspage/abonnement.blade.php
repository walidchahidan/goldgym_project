@extends('layouts.adminLayout')
@section('title' , 'Abonnements')
<head>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

@section('content')

<div class="container">
    <h3 class="text-white pb-5">List des Abonnements</h3>
    <div class="row d-flex flex-nowrap">
    <div class="col">
        <h2 class="fs-1 fw-bold" style="color: rgb(136, 127, 8)" >Gold </h2>
        <div class="table-responsive">
            
            <table class="table" style="color: wheat">
                
                <thead>
                    <tr>  
                        <th scope="col">Name</th>
                        <th scope="col">Sport</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Abonnement_id</th>
                    </tr>
                </thead>
                <tbody>
                  

                    @foreach ($golds as $gold)
                        <tr>
                          
                            <td>{{ $gold->name }}</td>
                            <td>{{ $gold->sport }}</td> 
                            @if ($gold->photo !== null)
                            <td><img src="{{ asset($gold->photo) }}" alt="{{ $gold->name }}" width="50px" height="50px" class="rounded-circle">
                            </td>
                            @else
                                <td><img src="{{ asset('storage/images/goldes/user.png') }}"
                                        alt="{{ $gold->name }}" width="50px" ></td>
                            @endif
                            <td>{{ $gold->abonnement_id }}</td>
                        </tr>
                    @endforeach
            </table>
    </div>

    <div class="col mt-5">
        <h2 class="fs-1 fw-bold" style="color: rgb(156, 153, 146)" >Silver </h2>
        <div class="table-responsive">
            <table class="table" style="color: wheat">
                
                <thead>
                    <tr>  
                        <th scope="col">Name</th>
                        <th scope="col">Sport</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Abonnement_id</th>
                    </tr>
                </thead>
                <tbody>
                  

                    @foreach ($silvers as $silver)
                        <tr>
                          
                            <td>{{ $silver->name }}</td>
                            <td>{{ $silver->sport }}</td> 
                            @if ($silver->photo !== null)
                            <td><img src="{{ asset($silver->photo) }}" alt="{{ $silver->name }}" width="50px" height="50px" class="rounded-circle">
                            </td>
                            @else
                                <td><img src="{{ asset('storage/images/goldes/user.png') }}"
                                        alt="{{ $silver->name }}" width="50px" ></td>
                            @endif
                            <td>{{ $silver->abonnement_id }}</td>
                        </tr>
                    @endforeach
            </table>
    </div>
</div>
</div>
</div>

@endsection