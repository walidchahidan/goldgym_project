<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Club;
use Illuminate\Http\Request;

class WelcomePageController extends Controller
{
    //


    public function showclasses(){
        $classes = Classe::get();
       
        return view('components.activities',compact('classes'));
    }
}
