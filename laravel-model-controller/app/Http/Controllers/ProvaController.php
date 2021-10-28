<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class ProvaController extends Controller
{
    public function index(){
        $films=Movie::all();
        
        return view('welcome', compact('films'));
    }
}
