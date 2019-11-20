<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    
    public function index()
    {
        $usuarios= \App\Usuario::get();
        return view('usuario.index', compact('usuarios'));
        
    }

    
    public function create()
    {
        return view('usuario.create');
    }

   
    public function store(Request $request)
    {
        $usuario=new\App\Usuario();
        $usuario->UsuName= $request->get('UsuName');
        $usuario->UsuSen= $request->get('UsuSen');
        $usuario->UsuNom= $request->get('UsuNom');
        $usuario->UsuTip= $request->get('UsuTip');
        $usuario->save();
        return "true";
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $usuario=\App\Usuario::find($id);
        return view('usuario.edit',compact('usuario'));
       
    }

    
    public function update(Request $request, $id)
    {
        $usuario=\App\Usuario::find($id);
        $usuario->UsuName= $request->get('UsuName');
        $usuario->UsuSen= $request->get('UsuSen');
        $usuario->UsuNom= $request->get('UsuNom');
        $usuario->UsuTip= $request->get('UsuTip');
        $usuario->save;
        return"true";
    }

    public function destroy($id)
    {
         $usuario=\App\Usuario::find($id);
         $usuario->delete();
    }
}
