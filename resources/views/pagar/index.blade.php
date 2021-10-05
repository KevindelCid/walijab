
@extends('layouts.app')
@section('content')
<div class="container">








<link href="{{ asset('css/paypal.css') }}" rel="stylesheet">
<script src="https://www.paypalobjects.com/api/checkout.js"></script>

 

<div class="jumbotron text-center">


<h1 class="display-4">¡Paso Final!</h1>
<hr class="my-4">
<p class="lead">

<h2><strong>{{$titu}}</strong></h2>
{{ $id_evento }}



@if($precio>0)
Estas apunto de pagar con paypal la cantidad de: 
<h4>${{$precio}}</h4> 



@if(isset(auth()->user()->id))

<script> 
let precio = {{ $precio }} ;
let user_id = {{ auth()->user()->id }};
let sid = "{{ Session::getId() }}";
let idventa = "{{ $idventa }}";
let idevento = {{ $id_evento }};

</script>
@else

<script> 
    let precio = {{ $precio }} ;
    let user_id = "no proporcionado";
    let sid = "{{ Session::getId() }}";
    let idventa = "{{ $idventa }}";
    let idevento = "{{ $id_evento }}";
    </script>
    @endif





<div id="paypal-button-container"></div>
@else
<h4>${{$precio}}</h4> 
<input type="submit" value="Reservar cita gratuita" class="btn btn-success">
@endif
</p><p>Al concretar el pago la cita quedará reservada unicamente para ti<br>

<strong>Visita la agenda de eventos pendientes en tu perfil</strong>
</p>




</div>










</div>
<script src="{{ asset('js/paypal.js') }}" defer></script>
@endsection('layouts.app')