<?php
use App\nawal;
use App\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NawalController;
use Carbon\Carbon;
use App\Http\Controllers\CholqinfoController;
use App\Http\Controllers\PagosController;
use App\Http\Controllers\ReunionesController;
use App\Http\Controllers\AgendaController;

use App\Http\Controllers\PerfilController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('nawales/ver', function () {
    
    return view('nawales/ver');
});
Route::get('aprender', function () {
    
    return view('aprender/index');
})->name('aprender.index');

Route::get('preguntas', function () {
    
    return view('preguntas/index');
})->name('preguntas.index');


Route::get('orden_nawales', function () {
    
    return view('orden/orden_nawales');
})->name('orden.index');

Route::get('jugar/sopadeletras', function () {
    
    return view('sopa/sopadeletras');
})->name('sopa');



Route::get('ajqijab', function () {
    
    return view('ajqijab');
});
Route::get('ajqijab/solicitud', function () {
    
    return view('ajqijab/solicitud');
});
Route::get('ajqijab/eres_ajqij', function () {
    
    return view('ajqijab/eres_ajqij');
});


Route::get('nawales/ver', function () {
    
    return view('nawales.ver');
});
Route::get('/cholqij/hoy', function () {
    
    return view('cholqij/hoy');
});

Route::get('/cholqij/hoy', function () {
    
    return view('cholqij.hoy');
});
Route::get('/', function () {
    
    return view('auth/login');
});


Route::resource('nawales/ver', 'NawalController'::class);
Route::resource('ajqijab', 'AjqijabController'::class);
Route::resource('cholqij', 'CholqinfoController'::class);
Route::resource('nawales/crear', 'NawalController'::class);
Route::get('/cholqij/hoy',[CholqinfoController::class,'index']);
Route::get('ajqijab',[AjqijabController::class,'index']);
Route::get('ajqijab/solicitud',[AjqijabController::class,'solis']);
Route::get('ajqijab/eres_ajqij',[AjqijabController::class,'eres']);

Route::get('ajqijab/create',[AjqijabController::class,'create']);




Route::get('/nawales/ver',[NawalController::class,'index']);
Route::get('/nawales/crear',[NawalController::class,'create']);

Route::get('ajqijab', 'AjqijabController@index')->name('ajqijab.index');

Route::get('ajqijab/create', 'AjqijabController@create')->name('ajqijab.create');

Route::get('/nawales/ver', 'NawalController@index')->name('nawales.ver');

Route::get('/cholqij/hoy', 'CholqinfoController@index')->name('cholqij.hoy');

Route::post('nawales/crear','NawalController@create')->name('nawales.crear');

Route::get('/ajqijab/perfil/{id}', 'AjqijabController@verperfil');

Route::get('/ajqijab/perfil/srcs/{id}', 'AjqijabController@verperfil2');

Route::get('/ajqijab/solicitud', 'AjqijabController@solis');

Route::get('/ajqijab/eres_ajqij', 'AjqijabController@eres')->name('ajqijab.eres');

Route::get('/perfil/config', 'PerfilController@config')->name('perfil.config');

Route::post('/perfil/config','HomeController@profileUpdate');


Route::post('/perfil/eventito', 'AgendaController@eventito');

Route::post('/evento', 'AjqijabController@evento');

Route::post('pagar', 'PagosController@index')->name('pagar.index');

Route::post('/ajqijab/eventitoajqij', 'AgendaController@eventitoajqij');


Route::get('/perfil', 'AgendaController@index')->name('perfil.index');

Route::post('/perfil/guardar', 'AgendaController@guardar');

Route::get('/perfil/listar', 'AgendaController@listar');

Route::get('/ajqijab/perfil/listar', 'AjqijabController@listar');

Route::get('/reuniones/{enlace}', 'ReunionesController@index')->name('reuniones.index');

Route::get('/reuniones', 'ReunionesController@indexdos')->name('reuniones.index');
// Route::get('/reuniones/{enlace}', 'ReunionesController@enla');

// Route::post('/perfil/agregar', 'EventoController@store');



Route::resource('/perfil', 'AgendaController'::class)->middleware('auth');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
