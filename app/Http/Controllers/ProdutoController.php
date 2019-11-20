<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    
    public function index()
    {
        $produtos= \App\Produto::get();
        return view('produto.index', compact($produtos));
    }

   
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        $produto=new\App\Produto();
        $produto->ProNom= $request->get('ProNom');
        $produto->save();
        return "true";
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $produto=\App\Produto::find($id);
        return view('produto.edit',compact('produto'));
    }

    
    public function update(Request $request, $id)
    {
        $produto=\App\Produto::find($id);
        $Produto->PronNom=$request->get('ProNom');
        $produto->save;
        return"true";
    }

    public function destroy($id)
    {
         $produto=\App\Produto::find($id);
         $produto->delete();
    }
}
