<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class JoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Abonnementspage.add');
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
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'abonnement_id' => 'required',
            'telephone' => 'string',
            'sport' => 'string',
            'password' => 'required',
            
        ]);
        
        
        $validated['password'] = Hash::make($validated['password']);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = 'user_' . time() . '.' . $file->getClientOriginalExtension();

            $path = $request->file('photo')->storeAs('images/members', $fileName, 'public');
            $validated['photo'] = 'storage/' . $path;
        }


        

        $member = User::Create($validated);

        if (isset($member)) {
            return redirect()->route('welcomehome')->with('success','Membre ajouté avec succès!');
        }

        return back()->withErrors(['error' => 'User Insertion error']);
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
