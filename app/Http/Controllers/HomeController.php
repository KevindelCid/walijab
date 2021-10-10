<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Hamcrest\Core\HasToString;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Contracts\Service\Attribute\Required;
use App\models\Agenda;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\User;
use Illuminate\Pagination\Paginator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        date_default_timezone_set('America/Guatemala');
        $fee =  Carbon::now()->format('Y-m-d');


        $eventoss = DB::select("select * from agendas  inner join users on agendas.id_usuario = users.id where fecha >= '$fee'
        and (cliente=".auth()->user()->id." or id_usuario = ".auth()->user()->id.")   ORDER BY fecha");


        $eventos = new Paginator($eventoss, 1);


        return view('inicio',compact('eventos','fee'));
    }








    public function profileUpdate(Request $request){
        //validation rules
    
        $request->validate([
            'name' =>'required|min:4|string|max:255',
            'email'=>'required|email|string|max:255'
        ]);
        $user =Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();
        return back()->with('message','Profile Updated');
    }
    

}
