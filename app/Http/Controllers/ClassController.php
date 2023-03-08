<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Club;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $classes = Classe::all();
        return view('classes.listclass',compact('classes'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $classes = Classe::all();
        
        return view('classes.addclass',compact('classes'));
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
        $request->validate([
            'titre'=>'required',
        
            
        ]);
       

            $classe = new Classe();

            $classe->titre = $request->titre;
            $classe->description= $request->description;
            
            
            $classe->date = $request->date;
          
            $classe->horaire = $request->horaire;
            
         
           
    

            if($request->hasFile('photo')){
                    $image = $request->file('photo');
                    $image_name = $image->getClientOriginalName();
                    $path = $request->file('photo')->storeAs('/public/images' ,$image_name);
                    // $classe['photo'] = $image_name;
                    $classe['photo'] = $image_name;
                    
                }
            $classe->save();
            return redirect()->route('classes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $classes = Classe::all();
        $clubs = Club::all();
        // return view('welcome')->with('classes', $classes);
        return view('welcome' , compact('classes' , 'clubs'));
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
        $classe = Classe::find($id);
        return view('classes.editclasse',compact('classe'));
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
        $request->validate([
            'titre'=>'required',
        
            
        ]);
       

            $classe = Classe::find($id);

            $classe->titre = $request->titre;
            $classe->description= $request->description;
            
            
            $classe->date = $request->date;
          
            $classe->horaire = $request->horaire;
            
         
           
    

            if($request->hasFile('photo')){
                    $image = $request->file('photo');
                    $image_name = $image->getClientOriginalName();
                    $path = $request->file('photo')->storeAs('/public/images' ,$image_name);
                    // $classe['photo'] = $image_name;
                    $classe['photo'] = $image_name;
                    
                }
            $classe->save();
            return redirect()->route('classes.index');
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
