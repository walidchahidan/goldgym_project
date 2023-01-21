<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = User::all();
        return view('Memberpage.listmembers',['members'=>$members]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Memberpage.addmember');
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
            'name' => 'required|string',
            'email' => 'required|email',
            'role' => 'string',
            'telephone' => 'string',
            'sport' => 'string'
            
        ]);
        
        $validated['password']='password';
        $validated['password'] = Hash::make($validated['password']);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = 'user_' . time() . '.' . $file->getClientOriginalExtension();

            $path = $request->file('photo')->storeAs('images/members', $fileName, 'public');
            $validated['photo'] = 'storage/' . $path;
        }


        

        $member = User::Create($validated);

        if (isset($member)) {
            return redirect()->route('members.index');
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
        $oldMember = User::find($id);

        
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'role' => 'string',
            'telephone' => 'string',
            'sport' => 'string'
        ]);
        $validated['password']='password';
        $validated['password'] = Hash::make($validated['password']);
       

        $oldMember->name = $validated['name'];
        $oldMember->email = $validated['email'];
        $oldMember->role = $validated['role'];
        $oldMember->telephone = $validated['telephone'];
        $oldMember->sport = $validated['sport'];
        $oldMember->user_id = Auth::user()->id;


        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = 'user_' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('photo')->storeAs('images/members', $fileName, 'public');
            $oldMember->photo = 'storage/' . $path;
        }


        
        if ($oldMember->save()) {
            return redirect()->route('members.index');
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
        $member = User::find($id);

        if ($member->delete()) {
            return redirect()->route('members.index');
        } else {
            return back()->withErrors(['error' => 'User Updating error']);
        }
    }
}
