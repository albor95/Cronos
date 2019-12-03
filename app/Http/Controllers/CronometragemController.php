<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CronometragemController extends Controller
{
     public function index()
    {
       $cronometragem= \App\Cronometragem::get();
        return view('cronometragem.index', compact('cronometragem'));
        
    }
    
     public function getTomadaTempo()
    {
       
        $codigoTomadaTempo=$_GET['cod'];
        $tomada=\App\TomadaTempo::where('TomCod','=',$codigoTomadaTempo)->get();
        
        return $tomada[0];
    }
    
    public function getElementos() {
        
        $codigoOperacao=$_GET['cod'];
        $elementos= \App\sequencia::where('OpCod','=',$codigoOperacao)->get();
        
        return $elementos;

    }
    
    public function guardar(Request $request) {
        
        $cronometragem= \App\TomadaTempo();
        $cronometragem->TomNumLei=$request->get('TomNumLei');
        $cronometragem->TomCod=$request->get('TomCod');
        $cronometragem->TomEle=$request->get('TomEle');
        $tempo=$request->get('CroTem');
        $tempo= str_replace(' ', '',$tempo);
        $cronometragem->save();
        return true;
    }
}
