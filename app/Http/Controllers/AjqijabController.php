<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\ajqij;
use App\User;
use App\models\Agenda;

class AjqijabController extends Controller
{
 
 public function index(){

//    $datos['users']=ajqij::paginate(5);
$datos = 
DB::select("select  * from users where tipo = 2");


   return view('ajqijab.index')->with('ajqijs',$datos);




   
 }

 
 public function verperfil($id){


    // $eventos = 
    // DB::table('agendas')
    // ->join('users', 'agendas.id', '=', 'users.id')
    // ->where('id_usuario', $id)
    // ->where('users.tipo', 2);
 

    $consulta = DB::select("select  * from users where id = $id and tipo = 2");

    // $listar = DB::select("select  * from agendas inner join users on agendas.id_usuario = users.id
    // where id_usuario = $id and tipo = 2");
    





    return view('ajqijab/perfil')->with('id', $id)->with('infoajqij', $consulta);//solo se llama a la vista sin los parametros extras que tiene la url
 
  }



  public function evento(Request $request){

    // $puta = "me cago en la puta";
       $input = $request->all();
       $id = $input["id"];
       



       $datos = Agenda::find($id);
       $descripcion = $datos->descripcion;
       $precio = $datos->precio;
    // $input = $request->all();
    
       // return view('agenda.index')->with('datos', $id);
       // return view("agenda.index")->with('datos', $id);
    
    //    return response()->json([
    //       'name' => 'Abigail',
    //       'state' => 'CA'
    //   ]);  
    return array("datoid"=>$descripcion,"precio"=>$precio);
    
       // return response()->json(["ok"=>true ]);
       
    // return view("agenda.index")->with("dato","POR LA GRAN PUTAAAAA FUNCIONÄ MIERDA!!" );
     }
    
    
    


  public function verperfil2($id){


  

    $eventos = DB::select("select agendas.id, agendas.fecha, agendas.titulo, agendas.hora_inicio, agendas.hora_final, agendas.titulo, agendas.estado from agendas inner join users on agendas.id_usuario = users.id where id_usuario = $id and tipo = 2");
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
            //  "id_usuario"=>$evento->id_usuario
          ]
 
       ]; 
 
 
    }
    return response()->json($eve);


  }

 public function indexv(){

  //  $datos['ajqijs']=ajqij::paginate(3);
  //  return view('ajqijab.vista',$datos);

 }

 public function solis(){

   
$f = 'holis';
    return view('ajqijab/solicitud')->with('coso',$f);
 
  }
  public function eres(){

    return view('ajqijab.eres_ajqij');
 
  }

 public function create()
 {
    return view('ajqijab.create');
 }
 
 public function edit($id)
 {

     $ajqij=ajqij::findOrFail($id);
     return view('ajqijab.edit',compact('ajqij'));
     //
 }


function listar($id){


//    // DB::select('SELECT * FROM agendas where');
//    $eventos = 
//    DB::table('agendas')
//    ->join('users', 'agendas.id', '=', 'users.id')
//    ->where('id_usuario', $id;



//    $eventos = DB::table('users')
//    ->join('contacts', 'users.id', '=', 'contacts.user_id')
//    ->join('orders', 'users.id', '=', 'orders.user_id')
//    ->select('users.*', 'contacts.phone', 'orders.price')
//    ->get();


//    // $eventos = Agenda::all();
//    // dd($eventos);
//    $eve=[];

//    foreach($eventos as $evento){


//       $eve[] = [

//          "id"=>$evento->id,
//          "start"=>$evento->fecha . " " . $evento->hora_inicio,
//          "end"=>$evento->fecha . " ". $evento->hora_final,
//          "title"=>$evento->titulo,
//          "backgroundColor"=>$evento->estado == 1 ? "#7ACF2A" : "#CF2A2A",
//          "textColor"=>"#fff",
//          "extendedProps"=>[
//             "id_usuario"=>$evento->id_usuario
//          ]

//       ]; 


//    }

//    return response()->json($eve);

}



 public function store(Request $request)
    {
        //
        // $datosEmpleado = request()->all();


        $campos=[
            'nombre'=>'required|string|max:100',
            'apellido'=>'required|string|max:100',
            'telefono'=>'required|string|max:100',
            'correo'=>'required|email',
            'estado'=>'required|string|max:10',
           

        ];
        $mensaje=[
            'required'=>'El atributo :attribute es requerido' 
        ];


        if($request->hasFile('foto')){
            $campos=[ 'foto'=>'required|max:10000|mimes:jpeg,png,jpg'];
            $mensaje=['required'=>'La imagen debe ser estar en los formatos jpeg,png o jpg' ];
        }


        $this->validate($request,$campos,$mensaje);

        $datosAjqij = request()->except('_token');
        // echo $datosEmpleado;

if($request->hasFile('foto')){

    $datosAjqij['foto']=$request->file('foto')->store('uploads','public');
}

        ajqij::insert($datosAjqij);

        return redirect('ajqijab')->with('mensaje','Se ha agregado un ajq\'ij');
        // return response()->json($datosEmpleado);
    }




    //
}
