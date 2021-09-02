

    @extends('layouts.app')
    @section('content')
        <div class="container ">
            <div id="obj1" class="col-md-12">
                <div class="box">
                    <form action="{{ route('cholqij.hoy') }}" class="mb-5" method="get" enctype="multipart/form-data">
                     <div class="row">               
     <h2 for="name" >Cholq'ij</h2>
     <br>
                         <div class="col-md-4 form-group">
                           
                                <input type="date" class="form-control" name="fecho" id="fecho">
                         </div>
                         <div class="col-md-2 form-group">
                      
                                <input type="submit" class="btn btn-danger" value="Calcular">
                         </div>
                     </div>
                    </form>
                    
    
    
    
    
    
    
                    
    
    
    @foreach ($chol as $cho)
    <div class="centrar">
    <h2>9 Lunaciones, energías totales: {{ $cho->total }}</h2>
    
    <h6>{{ $fesha }}</h6>

    
    <div class="col-md-12">
        <div class="box">
    
    
    
    
    <div class="row">
          
    <div class="col-md-4 ">

                {{ $cho->nizcnombre ." ". $cho->n_izquierda_concepcion  }}<br>
    
        <img id="openpopup6" class="img-fluid col-md-4 m-2 p-0 " src="{{ asset('storage').'/'.$cho->glifo6  }}" width="200" alt="">
    
    </div>
    
    
     
    <div class="col-md-4 ">
        
      
    {{ $cho->ncnombre  }}
    {{ $cho->n_concepcion  }} <br>
    <img id="openpopup2" class="img-fluid col-md-4 m-2 p-0" src="{{ asset('storage').'/'.$cho->glifo2  }}" width="200" alt="">
    
    </div>
    
     
    <div class="col-md-4 ">
        {{ $cho->ndercnombre  }}
        {{ $cho->n_derecha_concepcion  }} <br>
        <img id="openpopup7" class="img-fluid col-md-4 m-2 p-0 " src="{{ asset('storage').'/'.$cho->glifo7  }}" width="200" alt="">
    </div>
    
    
    
    <div class="col-md-4 ">
    
        {{ $cho->niznombre  }}
        {{ $cho->n_izquierda  }} <br>
        <img id="openpopup5" class="img-fluid col-md-4 m-2 p-0 " src="{{ asset('storage').'/'.$cho->glifo5  }}" width="200" alt="">
    
    </div>
    
    
    
    <div class="col-md-4 ">
    {{ $cho->nombre_nawal }}
    {{ $cho->fuerza  }} <br>
    <img id="openpopup1" lass="img-fluid col-md-6 m-0 p-0" src="{{ asset('storage').'/'.$cho->glifo1  }}" width="200" alt="">
    
       
    </div>
    
    
    <div class="col-md-4 ">
    
        {{ $cho->ndernombre  }}
        {{ $cho->n_derecha }} <br>
        <img id="openpopup4" class="img-fluid col-md-4 m-2 p-0 " src="{{ asset('storage').'/'.$cho->glifo4  }}" width="200" alt="">
    
    </div>
    
    
    
    
    <div class="col-md-4 ">
    
        {{ $cho->nizdenombre  }}
        {{ $cho->n_izquierda_destino }} <br>
        <img id="openpopup8" class="img-fluid col-md-4 m-2 p-0 " src="{{ asset('storage').'/'.$cho->glifo8  }}" width="200" alt="">
    
    </div>
    <div class="col-md-4 ">
    
        {{ $cho->ndnombre  }}
        {{ $cho->n_destino }} <br>
        <img id="openpopup3" class="img-fluid col-md-4 m-2 p-0 " src="{{ asset('storage').'/'.$cho->glifo3  }}" width="200" alt="">
    
    </div>
    
    <div class="col-md-4 ">
    
        {{ $cho->nderdenombre  }}
        {{ $cho->n_derecha_destino }} <br>
        <img id="openpopup9" class="img-fluid col-md-4 m-2 p-0 " src="{{ asset('storage').'/'.$cho->glifo9  }}" width="200" alt="">
    
    </div>
    
    
    </div>
    </div>
    </div>
    </div>
   
    <div class="overlay" id="overlay2" data-keyboard="false" data-backdrop="static">


<div class="popup" id="popup2">

<a href="" id="cerrar2" class="btn-cerrar-popup"><i class="fa fa-times fa-2x"></i></a>

<img id="" class=" " src="{{ asset('storage').'/'.$cho->imginfo2  }}" width="900" alt="">

</div>


    </div>
    <div class="overlay" id="overlay3" data-keyboard="false" data-backdrop="static">


        <div class="popup" id="popup3">
        
        <a href="" id="cerrar3" class="btn-cerrar-popup"><i class="fa fa-times fa-2x"></i></a>
        
        <img id="" class=" " src="{{ asset('storage').'/'.$cho->imginfo3  }}" width="900" alt="">
        
        </div>
        
            </div>
   
            <div class="overlay" id="overlay1" data-keyboard="false" data-backdrop="static">


                <div class="popup" id="popup1">
                
                <a href="" id="cerrar1" class="btn-cerrar-popup"><i class="fa fa-times fa-2x"></i></a>
                
                <img id="" class=" " src="{{ asset('storage').'/'.$cho->imginfo12  }}" width="900" alt="">

                </div>
                
                
                    </div>
                    <div class="overlay" id="overlay4" data-keyboard="false" data-backdrop="static">


                        <div class="popup" id="popup4">
                        
                        <a href="" id="cerrar4" class="btn-cerrar-popup"><i class="fa fa-times fa-2x"></i></a>
                        
                        <img id="" class=" " src="{{ asset('storage').'/'.$cho->imginfo4  }}" width="900" alt="">
                        
                        </div>
                        
                        
                            </div>
                            <div class="overlay" id="overlay5" data-keyboard="false" data-backdrop="static">


                                <div class="popup" id="popup5">
                                
                                <a href="" id="cerrar5" class="btn-cerrar-popup"><i class="fa fa-times fa-2x"></i></a>
                                
                                <img id="" class=" " src="{{ asset('storage').'/'.$cho->imginfo5  }}" width="900" alt="">
                                
                                </div>
                                
                                
                                    </div>
                                    <div class="overlay" id="overlay6" data-keyboard="false" data-backdrop="static">


                                        <div class="popup" id="popup6">
                                        
                                        <a href="" id="cerrar6" class="btn-cerrar-popup"><i class="fa fa-times fa-2x"></i></a>
                                        
                                        <img id="" class=" " src="{{ asset('storage').'/'.$cho->imginfo6  }}" width="900" alt="">
                                        
                                        </div>
                                        
                                        
                                            </div>
                                            <div class="overlay" id="overlay7" data-keyboard="false" data-backdrop="static">


                                                <div class="popup" id="popup7">
                                                
                                                <a href="" id="cerrar7" class="btn-cerrar-popup"><i class="fa fa-times fa-2x"></i></a>
                                                
                                                <img id="" class=" " src="{{ asset('storage').'/'.$cho->imginfo7  }}" width="900" alt="">
                                                
                                                </div>
                                                
                                                
                                                    </div>
                                                    <div class="overlay" id="overlay8" data-keyboard="false" data-backdrop="static">


                                                        <div class="popup" id="popup8">
                                                        
                                                        <a href="" id="cerrar8" class="btn-cerrar-popup"><i class="fa fa-times fa-2x"></i></a>
                                                        
                                                        <img id="" class=" " src="{{ asset('storage').'/'.$cho->imginfo8  }}" width="900" alt="">
                                                        
                                                        </div>
                                                        
                                                        
                                                            </div>
                                                            <div class="overlay" id="overlay9" data-keyboard="false" data-backdrop="static">


                                                                <div class="popup" id="popup9">
                                                                
                                                                <a href="" id="cerrar9" class="btn-cerrar-popup"><i class="fa fa-times fa-2x"></i></a>
                                                                
                                                                <img id="" class=" " src="{{ asset('storage').'/'.$cho->imginfo9  }}" width="900" alt="">
                                                                
                                                                </div>
                                                                
                                                                
                                                                    </div>
                                                                    <div class="overlay" id="overlay10" data-keyboard="false" data-backdrop="static">


                                                                        <div class="popup" id="popup10">
                                                                        
                                                                        <a href="" id="cerrar10" class="btn-cerrar-popup"><i class="fa fa-times fa-2x"></i></a>
                                                                        
                                                                        <img id="" class=" " src="{{ asset('storage').'/'.$cho->imginfo10  }}" width="900" alt="">
                                                                        
                                                                        </div>
                                                                        
                                                                        
                                                                            </div>
     
    @endforeach
    
    
    
    
    <script>


var abrirpp2 = document.getElementById('openpopup2'),
    overlay2 = document.getElementById('overlay2'),
    popup2 = document.getElementById('popup2'),
    cerrar2 = document.getElementById('cerrar2'),
    abrirpp3 = document.getElementById('openpopup3'),
    overlay3 = document.getElementById('overlay3'),
    popup3 = document.getElementById('popup3'),
    cerrar3 = document.getElementById('cerrar3'),
    abrirpp4 = document.getElementById('openpopup4'),
    overlay4 = document.getElementById('overlay4'),
    popup4 = document.getElementById('popup4'),
    cerrar4 = document.getElementById('cerrar4'),
    abrirpp5 = document.getElementById('openpopup5'),
    overlay5 = document.getElementById('overlay5'),
    popup5 = document.getElementById('popup5'),
    cerrar5 = document.getElementById('cerrar5'),
    abrirpp6 = document.getElementById('openpopup6'),
    overlay6 = document.getElementById('overlay6'),
    popup6 = document.getElementById('popup6'),
    cerrar6 = document.getElementById('cerrar6'),
    abrirpp7 = document.getElementById('openpopup7'),
    overlay7 = document.getElementById('overlay7'),
    popup7 = document.getElementById('popup7'),
    cerrar7 = document.getElementById('cerrar7'),
    abrirpp8 = document.getElementById('openpopup8'),
    overlay8 = document.getElementById('overlay8'),
    popup8 = document.getElementById('popup8'),
    cerrar8 = document.getElementById('cerrar8'),
    abrirpp9 = document.getElementById('openpopup9'),
    overlay9 = document.getElementById('overlay9'),
    popup9 = document.getElementById('popup9'),
    cerrar9 = document.getElementById('cerrar9'),
    abrirpp10 = document.getElementById('openpopup10'),
    overlay10 = document.getElementById('overlay10'),
    popup10 = document.getElementById('popup10'),
    cerrar10 = document.getElementById('cerrar10'),
    abrirpp1 = document.getElementById('openpopup1'),
    overlay1 = document.getElementById('overlay1'),
    popup1 = document.getElementById('popup1'),
    cerrar1 = document.getElementById('cerrar1');


    abrirpp2.addEventListener('click', function(){
        overlay2.classList.add('active');
        popup2.classList.add('active');
    });
    cerrar2.addEventListener('click', function(){
        overlay2.classList.remove('active');
        popup2.classList.remove('active');
    });
    
    abrirpp1.addEventListener('click', function(){
        overlay1.classList.add('active');
        popup1.classList.add('active');
    });
    cerrar1.addEventListener('click', function(){
        overlay1.classList.remove('active');
        popup1.classList.remove('active');
    });

    abrirpp3.addEventListener('click', function(){
        overlay3.classList.add('active');
        popup3.classList.add('active');
    });
    cerrar3.addEventListener('click', function(){
        overlay3.classList.remove('active');
        popup3.classList.remove('active');
    });


    abrirpp4.addEventListener('click', function(){
        overlay4.classList.add('active');
        popup4.classList.add('active');
    });
    cerrar4.addEventListener('click', function(){
        overlay4.classList.remove('active');
        popup4.classList.remove('active');
    });

    abrirpp5.addEventListener('click', function(){
        overlay5.classList.add('active');
        popup5.classList.add('active');
    });
    cerrar5.addEventListener('click', function(){
        overlay5.classList.remove('active');
        popup5.classList.remove('active');
    });

    abrirpp6.addEventListener('click', function(){
        overlay6.classList.add('active');
        popup6.classList.add('active');
    });
    cerrar6.addEventListener('click', function(){
        overlay6.classList.remove('active');
        popup6.classList.remove('active');
    });

    abrirpp7.addEventListener('click', function(){
        overlay7.classList.add('active');
        popup7.classList.add('active');
    });
    cerrar7.addEventListener('click', function(){
        overlay7.classList.remove('active');
        popup7.classList.remove('active');
    });

    abrirpp8.addEventListener('click', function(){
        overlay8.classList.add('active');
        popup8.classList.add('active');
    });
    cerrar8.addEventListener('click', function(){
        overlay8.classList.remove('active');
        popup8.classList.remove('active');
    });

    abrirpp9.addEventListener('click', function(){
        overlay9.classList.add('active');
        popup9.classList.add('active');
    });
    cerrar9.addEventListener('click', function(){
        overlay9.classList.remove('active');
        popup9.classList.remove('active');
    });

    abrirpp10.addEventListener('click', function(){
        overlay10.classList.add('active');
        popup10.classList.add('active');
    });
    cerrar10.addEventListener('click', function(){
        overlay10.classList.remove('active');
        popup10.classList.remove('active');
    });

    </script>
    
    
        </div>
    
        @endsection('layouts.app')  
        <script src="{{ asset('js/popus.js') }}"></script>