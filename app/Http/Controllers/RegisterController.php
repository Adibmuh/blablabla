<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:25'
        ]);

        $validateData['password'] = bcrypt($request['password']);
        // $validateData['password'] = Hash::make($request['password']);

        User::create($validateData);

        // $request->session()->flash('success', 'Registration Seccesfull!');

        return redirect('/login')->with('success', 'Registration Seccesfull!'); // sama dengan yang atas untuk flash.
    }
}
