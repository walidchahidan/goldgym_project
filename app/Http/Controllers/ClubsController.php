<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClubsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubs= DB::table('clubs')->select('*')->get();
        return view('clubspage.clubs',['clubs'=>$clubs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clubspage.addclub');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string',
            'adresse' => 'string',
            'telephone' => 'string',
            'email' => 'required|email',
            
        ]);
        
        
        

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = 'user_' . time() . '.' . $file->getClientOriginalExtension();

            $path = $request->file('photo')->storeAs('images/clubs', $fileName, 'public');
            $validated['photo'] = 'storage/' . $path;
        }


        

        $club = Club::Create($validated);

        if (isset($club)) {
            return redirect()->route('clubs.index')->with('success' , 'Club ajouté avec succèes');
        }

        return back()->withErrors(['error' => 'User Insertion error']);
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
        $clubs = Club::all();
        
        return view('welcome')->with('clubs', $clubs);
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
        $oldclub = Club::find($id);

        
        $validated = $request->validate([
            'nom' => 'required|string',
            'adresse' => 'string',
            'telephone' => 'string',
            'email' => 'required|email',
        ]);
        
       

        $oldclub->nom = $validated['nom'];
        $oldclub->adresse = $validated['adresse'];
        $oldclub->telephone = $validated['telephone'];
        $oldclub->email = $validated['email'];
        
       
        
        $oldclub->user_id = Auth::user()->id;


        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = 'club_' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('photo')->storeAs('images/clubs', $fileName, 'public');
            $oldclub->photo = 'storage/' . $path;
        }


        
        if ($oldclub->save()) {
            return redirect()->route('clubs.index')->with('success','club modifié avec succès');
        }

        return back()->withErrors(['error' => 'User Updating error']);
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
        $club = Club::find($id);

        if ($club->delete()) {
            return redirect()->route('clubs.index')->with('success','club supprimé avec succès');
        } else {
            return back()->withErrors(['error' => 'User Updating error']);
        }
    }

    
}
