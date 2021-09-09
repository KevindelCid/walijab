@extends('layouts.app')
@section('content')
<script src='https://meet.jit.si/external_api.js'></script>


<input type="hidden" id="enlace" value="@if(isset($enlace)) {{$enlace}} @endif">
<script type="text/javascript">


function meetjit(){
    var enlace = $("#enlace").val();

    if (enlace !== '') {
    // the variable is defined

    const domain = 'meet.jit.si';
const options = {
   
    //aqui genero un link pero me interesa que este compuesto por el id del usuario cliente 
    //por el id del ajqij
    //por la fecha en la que se agendó
    //el estado del evento

    //deberia quedar de la siguiente forma: nombre_ajqij&22-33-17-9-210

    // y estos datos de preferencia encriptarlos
    // y luego guardar este dato en la base de datos para acceder a el despues y eliminarlo al completar la reunion

    roomName: enlace,
    width: 700,
    height: 500,
    parentNode: document.querySelector('#meet')
};
const api = new JitsiMeetExternalAPI(domain, options);
}
else{

alert("el enlace no ha sido proporcionado en este caso vamos a mostrar la fecha y hora de la reunion más cercana que tiene pendiente la persona y una tabla con todas las reuniones que tiene pendientes con su fecha y hora");

}
}
window.onload = meetjit;
</script>


<div class="container">

<div id="meet"></div>
 
</div>
@endsection('layouts.app')