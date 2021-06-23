@extends('nav.nav')
@section('titulo', 'Listado de Contratos')
@section('content')
    @isset($contrato)
    <div class="card">
        <div class="card-body">
            <h1>Contrato N°{{$contrato[0]->idcontrato}}</h1><br>
            <p>RUT asociado al Contrato: {{$contrato[0]->rut}}</p>
            <p>Tipo de Contrato: {{$contrato[0]->nombretipocontrato}}</p>
            <p>Observaciones: {{$contrato[0]->observacion}}</p>
            <p>Ingresado por: {{$contrato[0]->idusuario}}</p>
            <p>Fecha: {{$contrato[0]->fechahora}}</p>
            <a href="{{asset('docs/test.pdf')}}" target="_blank" style="display:none" id="link">Para visualizar el contrato, haga clic aquí</a>
        </div>
      </div>
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