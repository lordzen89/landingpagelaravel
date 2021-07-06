@extends('nav.nav')
@section('titulo', 'Previsualizacion de Documento')
@section('content')
    @isset($contrato)

      <div class="card" style="width: 100%;">
  <div class="card-header">
  <h1 class="display-1 text-center">Previsualización documento N°{{$contrato[0]->idcontrato}}</h1>
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
  <a href="{{route('contratos.save', ['idcontrato' => $contrato[0]->idcontrato])}}"><button type="button" class="btn btn-primary mx-1 px-4">Guardar</button></a>
  <a href="javascript:history.back()"><button type="button" class="btn btn-danger px-4 mx-1">Cancelar<i class="far fa-trash-alt"></i></button></a>
  </div>
</div>
<!-- <div id="link" class="text-center mt-3 mb-3 p-3 mb-2 bg-primary bg-gradient text-white "> -->
<!-- </div> -->
      <div class="card" style="margin-top:10px">
        <div class="card-body">
        <div>
            <object data='{{asset($contrato[0]->ruta)}}' id="contrato" title="Contrato PDF" style="width:80%;height:700px;margin-left:10%;">
                <p>Tu navegador no soporta abrir PDFs</p>
                <p><a href="{{asset($contrato[0]->ruta)}}" target="_blank">Descarga aquí</a></p>
            </object>
        </div>


</div>
</div>

</body>
<script>
    window.onload = function(){
        var ruta = '{{asset($contrato[0]->ruta)}}';
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