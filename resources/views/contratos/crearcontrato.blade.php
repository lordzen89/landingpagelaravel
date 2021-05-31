@extends('nav.nav')
@section('titulo', 'Registro de Contratos')
@section('content')
<div class="container" style="max-width: 75%; margin-top:10px">
    <h1>Registro de Contrato</h1>
<form>
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
        <label for="rut" class="form-label">RUT asociado al contrato</label>
        <input class="form-control" name="rut" id="rut" type="text" placeholder="Sin puntos con guión" aria-label="default input example">
      </div>
    <div class="mb-3">
        <label for="tipocontrato" class="form-label">Tipo de Contrato</label>
        <select class="form-select" aria-label="Default select example" name="tipocontrato" id="tipocontrato">
            <option value="0" selected>Seleccione un tipo de contrato</option>
            <option value="1">Bien Raíz</option>
            <option value="2">Vehículo</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="observacion" class="form-label">Observación</label>
        <textarea class="form-control" id="observacion" name="observacion" rows="4"></textarea>
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Cargar Archivo</label>
        <input class="form-control" type="file" id="formFile">
    </div>
    <button type="button" onclick="validarformulario();" class="btn btn-primary">Siguiente</button>
  </form>
</div>
@endsection
@section('javascript')
<script>
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
            document.getElementById('textomodal').innerHTML = "Debe seleccionar un Tipo de Contrato";
            $('#myModal').modal('show');
            return;
        }
        if(document.getElementById('formFile').files.length == 0) {
            document.getElementById('textomodal').innerHTML = "Debe cargar un archivo";
            $('#myModal').modal('show');
            return;
        }


        $('#liveToast').toast('show');
    }
</script>
@endsection
