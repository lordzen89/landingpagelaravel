<?php

namespace App\Http\Controllers;
use App\Models\Contrato;
use Illuminate\Http\Request;

class ContratoController extends Controller
{

    public function index()
    {
        //Listado de contratos
        return view('contratos.index');
    }

    public function crearcontrato()
    {
        //Listado de contratos
        return view('contratos.crearcontrato');
    }

    public function contrato($idcontrato)
    {
        //Contrato individual
        $contrato = Contrato::select('contratos.idcontrato','contratos.rut' ,'tipocontrato.nombretipocontrato', 
        'contratos.idusuario', 'contratos.observacion', 'contratos.ruta', 'contratos.fechahora')
        ->join('tipocontrato','tipocontrato.idtipocontrato','=','contratos.tipocontrato' )
        ->where('contratos.idcontrato', '=', $idcontrato)
        ->get();

            if(count($contrato) == 0){
                return view('contratos.contrato');
            }
    
        
            return view('contratos.contrato', ['contrato' => $contrato, 'status' => 'ok']);
    }
}
