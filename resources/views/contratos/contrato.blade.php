@extends('nav.nav')
@section('titulo', 'Listado de Contratos')
@section('content')
    @isset($contrato)
  
      <div class="card" style="width: 100%;">
  <div class="card-header">
  <h1 class="display-1 text-center">Contrato N°{{$contrato[0]->idcontrato}}</h1>
  </div>
 <div class="container p-4">
 <ul class="list-group list-group-flush">
    <li class="list-group-item"><div class="row">
        <div class="col col-lg-4"><h5 class="d-inline m-2"> <i class="fas fa-address-card mx-2"></i>RUT asociado: </h5></div>
        <div class="col-12 col-sm-5  my-2 d-flex d-sm-inline justify-content-center"><em>{{$contrato[0]->rut}}</em></div>
    </div>
        </li>
    <li class="list-group-item"><div class="row">
        <div class="col col-lg-4"> <h5 class="d-inline m-2"><i class="fas fa-check-square mx-2"></i> Tipo de Contrato: </h5></div>
        <div class="col-12 col-sm-5 col-lg-4 my-2 d-flex d-sm-inline justify-content-center"> <em> {{$contrato[0]->nombretipocontrato}}</em></div>
    </div>     
 </li>
    <li class="list-group-item">
     <div class="row">
         <div class="col col-lg-4"> <h5 class="d-inline m-2"><i class="fas fa-check-square mx-2"></i> Observaciones: </h5></div>
         <div class="col-12 col-sm-5 col-lg-4 my-2 d-flex d-sm-inline justify-content-center"><em>{{$contrato[0]->observacion}}</em></div>
     </div>   
   </li>
    <li class="list-group-item"><div class="row">
        <div class="col col-lg-4"><h5 class="d-inline m-2"><i class="fas fa-check-square mx-2"></i> Ingresado por: </h5></div>
        <div class="col-12 col-sm-5 col-lg-4 my-2 d-flex d-sm-inline justify-content-center"><em>{{$contrato[0]->idusuario}}</em></div>
    </div>
        </li>
    <li class="list-group-item">
        <div class="row">
            <div class="col col-lg-4"><h5 class="d-inline m-2"><i class="fas fa-check-square mx-2"></i> Fecha ingreso: </h5></div>
            <div class="col-12 col-sm-5 col-lg-4 my-2 d-flex d-sm-inline justify-content-center"> <em>{{$contrato[0]->fechahora}}</em></div>
        </div>
   </li>
  </ul>
 </div>
 
  <div class="btnes m-4 text-end">
  <button type="button" class="btn btn-primary mx-1 px-4">Guardar</button>
  <button type="button" class="btn btn-danger px-5 mx-1"><i class="far fa-trash-alt"></i></button>
  </div>
</div>
<!-- <div id="link" class="text-center mt-3 mb-3 p-3 mb-2 bg-primary bg-gradient text-white "> -->
    <a class="text-white text-decoration-none bg-image hover-zoom " href="{{asset('docs/test.pdf')}}" target="_blank" style="display:none" id="link">Para visualizar el contrato, haga clic aquí</a>
<!-- </div> -->
      <div class="card" style="margin-top:10px">
        <div class="card-body">
    <div>
        <iframe src="" id="contrato" title="Contrato PDF" style="width:80%;height:700px;margin-left:10%;display:none"></iframe>
    </div>
    <div>
        <img src="" id="contratoimg" title="Contrato Imagen" style="max-width:80%;max-height:700px;margin-left:10%;display:none">
    </div>
</div>
</div>

</body>
<script>
    window.onload = function(){
        var ruta = '{{asset($contrato[0]->ruta)}}';
 
        debugger;
        if(ruta.indexOf('.pdf') !== -1){
            if( isMobile.any() ){
                document.getElementById('link').style.display = "";
            } else {
                document.getElementById('contrato').src = ruta;
                document.getElementById('contrato').style.display = "";
            }
        } else {
                document.getElementById('contratoimg').src = ruta;
                document.getElementById('contratoimg').style.display = "";
        }
        
        
    }
    var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

</script>
@endisset
@endsection