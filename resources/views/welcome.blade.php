@extends('layouts.userLayout')
@section('title','home')
    

@section('content')
{{-- <x-nav-component/> --}}
<x-firstsec/>
<x-about/>
<x-clubslider :clubs="$clubs"/>
<x-activities :classes="$classes" />
<x-abonnements/>
<x-contact/>
<x-footer/>

@endsection