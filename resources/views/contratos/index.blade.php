@extends('nav.nav')
@section('titulo', 'Listado de Documento')
@section('content')
    <h1>Listado de Documento</h1>
    <div class="table-responsive">
    <table class="table table-success table-striped">
        <thead>
          <tr>
            <th scope="col">ID Documento</th>
            <th scope="col">Tipo de Documento</th>
            <th scope="col">RUT Asociado</th>
            <th scope="col">Observacion</th>
            <th scope="col">Fecha</th>
            <th scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          
    @foreach ($contrato as $item)
    <tr>
        <th scope="row"><a href="{{url('/contratos/'.$item->idcontrato)}}">{{$item->idcontrato}}</a></th>
        <td>{{$item->nombretipocontrato}}</td>
        <td>{{$item->rut}}</td>
        <td>{{$item->observacion}}</td>
        <td>{{$item->fechahora}}</td>
        <td><a href="{{url($item->ruta)}}" download>Descargar</a></td>
      </tr>
    @endforeach
</tbody>
</table>
</div>
@endsection
