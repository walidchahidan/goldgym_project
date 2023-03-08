<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class AffichController extends Controller
{
    //

    public function show($id){
        $club = Club::find($id);
        return view('clubspage.affichclub' , compact('club'));
    }
}
