<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CronometragemController extends Controller {

    public function index() {
        $cronometragem = \App\Cronometragem::get();
        return view('cronometragem.index', compact('cronometragem'));
    }

    public function getTomadaTempo() {

        $codigoTomadaTempo = $_GET['cod'];
        $tomada = \App\TomadaTempo::where('TomCod', '=', $codigoTomadaTempo)->get();

        return $tomada[0];
    }

    public function getElementos() {

        $codigoOperacao = $_GET['cod'];
        $elementos = \App\sequencia::where('OpeCod', '=', $codigoOperacao)->get();

        return $elementos;
    }

    public function guardar(Request $request) {

        $cronometragem = new \App\Cronometragem();
        $cronometragem->CroNroLei = $_GET['CroNroLei'];
        $cronometragem->TomCod = $_GET['TomCod'];
        $cronometragem->EleCod = $_GET['EleCod'];
        $tempo = $_GET['CroTem'];
        $tempo = str_replace(' ', '', $tempo);
        $cronometragem->CroTem = $tempo;
        $cronometragem->save();
        return "true";
    }

}
