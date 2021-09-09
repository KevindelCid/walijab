<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script>

function ocultar(){
document.getElementById('obj1').style.display = 'none';
document.getElementById('obj2').style.display = 'block';
document.getElementById('obj3').style.display = 'none';
}
function mostrar(){
document.getElementById('obj1').style.display = 'block';
document.getElementById('obj2').style.display = 'none';
document.getElementById('obj3').style.display = 'block';

}




    </script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Wal'ijab</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
  
    <script src="{{ asset('js/moment.min.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cards.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nawalestxt.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ca.css') }}" rel="stylesheet">

{{-- src de full calendar --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/locales-all.js"></script>
 <!-- include one of the moment-timezone builds -->

</head>
<body class="fondo opacity">
    <div id="app">
        <nav class="navbar navbar-expand-md  ">
            <div class="container">
            
                    <img id="" class="" src="{{ asset('storage').'/walijab.png' }}" width="120" alt="">
              
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"> 
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cholqij.hoy') }}">{{ __('Cholq\'ij (Hoy)') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('nawales.ver') }}">{{ __('Nawales') }}</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ajqijab.index') }}">{{ __('Ajq\'ijab') }}</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="{{ route('aprender.index') }}">{{ __('Aprender') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ajqijab.eres') }}">{{ __('¿Eres un ajq\'ij?') }}</a>
                        </li>
                      
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                      
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                
                            @endif
                        @else
                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ route('perfil.index') }}">
                                     {{ __('Perfil') }}
                                 </a>

                                    <a class="dropdown-item" href="{{ route('home') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <script type="text/javascript">
          

            </script>
        <script>






// document.getElementById("btnactualizar").addEventListener("click", function(){


// enviarDatos("http://loaclhost/walijab/public/perfil/actualizar/"+formulario.id.value);


// });

// function enviarDatos(url){

// const datos = new FormData(formulario);
// axios.post(url, datos)
// .then(
// (respuesta)=>{
//     calendar.refetchEvents();
//     $("#cambiarimg").modal("hide");
// }


// ).catch(

// error=>{

//     if(error.response){

// console.log(error.response.data);

//     }
// }

// )


// }


        </script>
      
        <main class="py-4">
            @yield('content')
        </main>  
       
    </div>
   
</body>
</html>