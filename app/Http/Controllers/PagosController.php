<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\models\pagos;

class PagosController extends Controller
{
    //

function index(Request $request){

    $input = $request->all();
    $titu = $input["titulo"];
    $precio = $input["precio"];

    return view('pagar.index')->with('titu', $titu)->with('precio',$precio);
}


}