<?php

namespace App\Http\Controllers;

use App\Models\Sandi;
use Illuminate\Http\Request;

class SandiController extends Controller
{
    public function index() 
    {
        return view('posts', [
            "title" => "Posts",
            "posts" => Sandi::all()
            
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            "title" => "single post",
            "post" => Sandi::find($slug)
        ]);
    }
}
