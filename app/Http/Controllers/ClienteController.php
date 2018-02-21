<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    //
    public function show(){
    	$clientes = Cliente::all();
    	//dd($clientes);
    	return View("cliente.form");
    }

    public function create(Request $request){
    	$cliente = new Cliente;
    	$cliente->Rfc = $request->rfc;
    	$cliente->nombre = $request->nombre;
    	$cliente->apellidos = $request->apellidos;
    	$cliente->save();
    	return View("welcome");
    }
}
