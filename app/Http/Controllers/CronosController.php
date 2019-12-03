<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CronosController extends Controller
{
     public function index()
    {
       
        return view('cronos.index');
        
    }
}
