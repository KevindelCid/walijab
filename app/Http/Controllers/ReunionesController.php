<?php

namespace App\Http\Controllers;




use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ReunionesController extends Controller
{
    

function indexdos(){


  return view('reuniones.index');
}

 public function index($enlace){



  $evento = DB::table('agendas')->where('link',  $enlace )->get();


  
  foreach($evento as $event){
   

     $event->cliente == auth()->user()->id |  $event->id_usuario == auth()->user()->id ? $status = 1 : $status = 2;




  }






return view('reuniones.index')->with("enlace",$enlace)->with("estado",$status);



    // $datos['ajqijs']=ajqij::paginate(5);
    
  }

//  function enla($enlace){


//   return array("enlace"=>$enlace);
//  }




public function listar($id){

  $eventos = 
   DB::table('agendas')->where('id_usuario', $id)->where('tipo',2);

  $eve=[];

  foreach($eventos as $evento){


     $eve[] = [

        "id"=>$evento->id,
        "start"=>$evento->fecha . " " . $evento->hora_inicio,
        "end"=>$evento->fecha . " ". $evento->hora_final,
        "title"=>$evento->titulo,
        "backgroundColor"=>$evento->estado == 1 ? "#7ACF2A" : "#CF2A2A",
        "textColor"=>"#fff",
        "extendedProps"=>[
           "id_usuario"=>$evento->id_usuario
        ]

     ]; 


  }

  return response()->json($eve);

}






}
