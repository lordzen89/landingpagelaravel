@extends('nav.nav')
@section('titulo', 'Registro de Contratos')
@section('content')
<div class="container" style="max-width: 75%; margin-top:10px">
    <h1>Registro de Documento</h1>
@isset($fail)
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  Modifica lo que necesites.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endisset
<form id="formulario" action="carga" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Error</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="textomodal">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Aceptar</button>
            </div>
          </div>
        </div>
    </div>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
        <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <img src="" class="rounded me-2" alt="...">
            <strong class="me-auto">Carga de Archivo</strong>
            <small>Ahora</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Su archivo se está subiendo...
          </div>
        </div>
      </div>
    <div class="mb-3">
        <label for="rut" class="form-label">RUT asociado al Documento</label>
        <input class="form-control" name="rut" id="rut" type="text" placeholder="Sin puntos con guión" aria-label="default input example">
      </div>
    <div class="mb-3">
        <label for="tipocontrato" class="form-label">Tipo de Documento</label>
        <select class="form-select" aria-label="Default select example" name="tipocontrato" id="tipocontrato">
            <option value="0" selected>Seleccione un tipo de Documento</option>
            <option value="1">Bien Raíz</option>
            <option value="2">Vehículo</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="observacion" class="form-label">Observación</label>
        <textarea class="form-control" id="observacion" name="observacion" rows="4"></textarea>
    </div>
    <div class="mb-3" id="cargaweb" style="display:none">
        <label for="formFile" class="form-label">Cargar Archivo</label>
        <input class="form-control" type="file" id="formFile" name="archivo[]" multiple>
    </div>
    <div class="mb-3" id="cargamobile0" style="display:none">
      <label for="formFile" class="form-label">Cargar Archivo</label>
      <input class="form-control" type="file" id="formFile2" name="archivomob0">
    </div>
  <input type="hidden" id="tiponav" name="tiponav" value="web">
  <input type="hidden" id="ninputs" name="ninputs" value="1">
  <div class="mb-3" id="crearboton" style="display:none"><button type="button" onclick="crearbotoncarga();" class="btn btn-primary">Subir otro archivo</button></div>
  <div class="mb-3"><button type="button" onclick="validarformulario();" class="btn btn-success">Siguiente</button></div>
    
  </form>
</div>
@endsection
@section('javascript')
<script>
  window.onload = function(){
    if( isMobile.any() ){
      document.getElementById("tiponav").value = "mobile";
      document.getElementById("cargamobile0").style.display = "";
      document.getElementById("crearboton").style.display = "";
    } else {
      document.getElementById("cargaweb").style.display = "";
      document.getElementById("tiponav").value = "web";
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
    var Fn = {
	validaRut : function (rutCompleto) {
		if (!/^[0-9]+[-|‐]{1}[0-9kK]{1}$/.test( rutCompleto ))
			return false;
		var tmp 	= rutCompleto.split('-');
		var digv	= tmp[1]; 
		var rut 	= tmp[0];
		if ( digv == 'K' ) digv = 'k' ;
		return (Fn.dv(rut) == digv );
	},
	dv : function(T){
		var M=0,S=1;
		for(;T;T=Math.floor(T/10))
			S=(S+T%10*(9-M++%6))%11;
		return S?S-1:'k';
	}
}
    function validarformulario(){
        var rut = document.getElementById('rut').value;
        if(Fn.validaRut(rut) == false){
            document.getElementById('textomodal').innerHTML = "El RUT ingresado no es correcto";
            $('#myModal').modal('show');
            return;
        }
        if(document.getElementById('tipocontrato').value == 0){
            document.getElementById('textomodal').innerHTML = "Debe seleccionar un Tipo de Documento";
            $('#myModal').modal('show');
            return;
        }
        if(document.getElementById('tiponav').value == 'web'){
          if(document.getElementById('formFile').files.length == 0) {
              document.getElementById('textomodal').innerHTML = "Debe cargar un archivo";
              $('#myModal').modal('show');
              return;
          }
        }
        else if(document.getElementById('tiponav').value == 'mobile') {
          if(document.getElementById('formFile2').files.length == 0) {
            document.getElementById('textomodal').innerHTML = "Debe cargar un archivo";
            $('#myModal').modal('show');
            return;
          }
        }

        $('#liveToast').toast('show');
        document.getElementById('formulario').submit();
    }

    function crearbotoncarga(){
      var num = document.getElementById("ninputs").value*1;
      var namediv = "cargamobile"+num;
      var div = document.getElementById("cargamobile"+(num-1));
      var divclon = div.cloneNode(true);
      var label = divclon.firstElementChild;
      var input = divclon.lastElementChild;
      input.value = null;
      var nameinput = "archivomob"+num;
      input.setAttribute("name", nameinput);
      divclon.id = "cargamobile"+num;
      divclon.removeChild(divclon.firstElementChild);
      divclon.removeChild(divclon.firstElementChild);
      divclon.appendChild(label);
      divclon.appendChild(input);
      div.insertAdjacentElement('afterend', divclon);
      document.getElementById("ninputs").value = num+1;
    }
</script>
@endsection
