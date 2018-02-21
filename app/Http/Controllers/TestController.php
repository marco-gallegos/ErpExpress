<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public show(){
    	$clientes = Cliente::all();
    }
}
