<?php

namespace App\Http\Controllers;

use App\Models\Abonnement;
use App\Models\User;
use App\View\Components\abonnements;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbonnementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $golds = User::where('abonnement_id','1')->get();
        $golds = DB::table('users')->where('abonnement_id',1)->get();
        $silvers = DB::table('users')->where('abonnement_id',2)->get();
        
        
        return view('Abonnementspage.abonnement' , compact('golds','silvers'));
        // return view('Abonnementspage.abonnement',['golds'=>$golds]);
        
        
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
