<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoachsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $coachs = User::where('role','Coach')->get();
        return view('coachspage.listecoach',['coachs'=>$coachs]);
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

        $oldcoach = User::find($id);

        
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'role' => 'string',
            'telephone' => 'string',
            'sport' => 'string'
        ]);
        
       

        $oldcoach->name = $validated['name'];
        $oldcoach->email = $validated['email'];
        $oldcoach->role = $validated['role'];
        $oldcoach->telephone = $validated['telephone'];
        $oldcoach->sport = $validated['sport'];
        $oldcoach->user_id = Auth::user()->id;


        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = 'user_' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('photo')->storeAs('images/coachs', $fileName, 'public');
            $oldcoach->photo = 'storage/' . $path;
        }


        
        if ($oldcoach->save()) {
            return redirect()->route('coachs.index')->with('success','coach modifié avec succès');
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
        $coach = User::find($id);

        if ($coach->delete()) {
            return redirect()->route('coachs.index')->with('success','coach supprimé avec succès');
        } else {
            return back()->withErrors(['error' => 'User Updating error']);
        }
    }
}
