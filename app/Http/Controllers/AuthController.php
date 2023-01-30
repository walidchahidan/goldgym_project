<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    

    public function displayregister(){

        return view('auth.register');
    }

    public function register(Request $request){

        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required |confirmed',
        ]);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = 'photo' . time() . '.' . $file->getClientOriginalExtension();

            $pic = $request->file('photo')->storeAs('images/members', $fileName, 'public');
            $validated['photo'] = 'storage/' . $pic;
        }

        $validated['password'] = Hash::make($validated['password']);
        $user = User::create($validated);

        return redirect()->route('view.login');
    }


    public function displaylogin(){

        return view('auth.login');
    }

    public function login(Request $request){
        
        $validated = $request->validate([
            'email' => 'required|string',
            'password' =>'required'
        ]);
        if(Auth::attempt($validated)){
            $request ->session()->regenerate();
            $user = Auth::user();
            if($user->role ==="Admin"){
                return redirect()->route('adminpage.adminhome');
            }
            else
            {
                return redirect()->route('welcomehome');
            }
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
            'password' =>'password incorrect',
        ]);
        
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
