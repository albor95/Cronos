<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacaoController extends Controller
{
   
    public function index()
    {
       $operacao= \App\Operacao::get();
        return view('operacao.index', compact('operacao'));
    }

   
    public function create()
    {
         return view('operacao.create');
    }

   
    public function store(Request $request)
    {
        $operacao=new\App\Operacao();
        $operacao->OpNom= $request->get('OpNom');
        //$operacao->ProCod= $request->get('ProCod');
        $operacao->OpMaq= $request->get('OpMaq');
        $operacao->OpCron= $request->get('OpCron');
        $operacao->save();
        return "true";
    }

    
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        $operacao=\App\Operacao::find($id);
        return view('operacao.edit',compact('operacao'));
    }

    
    public function update(Request $request, $id)
    {
        $operacao=\App\Operacao::find($id);
        $operacao->OpNom= $request->get('OpNom');
        //$operacao->ProCod= $request->get('ProCod');
        $operacao->OpMaq= $request->get('OpMaq');
        $operacao->OpCron= $request->get('OpCron');
        $operacao->save();
        return "true";
    }

    
    public function destroy($id)
    {
        $operacao=\App\Operacao::find($id);
        $operacao->delete();
    }
}
