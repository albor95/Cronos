<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CronometragemController extends Controller
{
     public function index()
    {
        $cronometragem= \App\Usuario::get();
        return view('cronometragem.index', compact('cronometragem'));
        
    }
}
