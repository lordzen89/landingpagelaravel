<?php

namespace App\Http\Controllers;
use App\Models\Contrato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
class ContratoController extends Controller
{

    public function index()
    {
        //Listado de contratos
        return view('contratos.index');
    }

    public function save($idcontrato){
        $contrato = new Contrato;
        $contrato = Contrato::where('idcontrato', '=', $idcontrato)->update(array('temporal' => 0));

        return $this->contrato($idcontrato, 'OK');
    }

    public function crearcontrato()
    {
        //Listado de contratos
        return view('contratos.crearcontrato');
    }

    public function contrato($idcontrato, $info = '')
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
    
            if($info != ''){
                return view('contratos.contrato', ['contrato' => $contrato, 'status' => 'ok', 'maravilloso' => 'ok']);
            }
            return view('contratos.contrato', ['contrato' => $contrato, 'status' => 'ok']);
    }

    public function info(Request $info){
        $data = $info->input();
        $tiponav = $data['tiponav'];
        $filesarry = array();
        if($tiponav == "mobile"){
            $cantidadinput = $data['ninputs']*1;
            if($info->hasfile("archivomob0")){
                $file = $info->file("archivomob0");
                $name = (time()*rand(0,12300)).'.'.$file->extension();
                $file->storeAs('public', $name);
                array_push($filesarry, $name);
            }
            for($x = 1; $x < $cantidadinput; $x++) {
                $nombreinput = "archivomob".$x;
                if($info->hasfile($nombreinput)){
                    $file = $info->file($nombreinput);
                    $name = (time()*rand(0,12300)).'.'.$file->extension();
                    $file->storeAs('public', $name);
                    array_push($filesarry, $name);
                }
            }
        } else if($tiponav == "web"){
            //normal web
            foreach ($info->file('archivo') as $file){
                $name = (time()*rand(0,12300)).'.'.$file->extension();
                $file->storeAs('public', $name);
                array_push($filesarry, $name);
            }
        }
        $nombrearchivoentrada = '';
        for($x = 0; $x < count($filesarry); $x++){
            if($nombrearchivoentrada == ''){
                $nombrearchivoentrada = $filesarry[$x];
            }
            else{
                $nombrearchivoentrada = $nombrearchivoentrada.",".$filesarry[$x];
            }
        }
        
        $test = new Contrato;
        $test->tipocontrato = $data['tipocontrato'];
        $test->rut = $data['rut'];
        $test->idusuario = 'usuario';
        $test->observacion = $data['observacion'];
        $nombrearchivosalida = (time()*rand(0,12300)).".pdf";

        $orden = "python3 /home/appslave/test2.py ".$nombrearchivoentrada." ".$nombrearchivosalida;
        $command = escapeshellcmd($orden);
        $output = shell_exec($command);
        $linkpdf = asset('storage/'.$nombrearchivosalida);

        $test->ruta = 'storage/'.$nombrearchivosalida;
        $save = $test->save();
        $id = $test->id;
        $contrato = Contrato::select('contratos.idcontrato','contratos.rut' ,'tipocontrato.nombretipocontrato', 
        'contratos.idusuario', 'contratos.observacion', 'contratos.ruta', 'contratos.fechahora')
        ->join('tipocontrato','tipocontrato.idtipocontrato','=','contratos.tipocontrato' )
        ->where('contratos.idcontrato', '=', $id)
        ->get();

            if(count($contrato) == 0){
                return 'algo no funciono';
            }
    
        
        return view('contratos.carga', ['contrato' => $contrato, 'status' => 'ok']);
        //return view('contratos.carga', ['linkpdf' => $linkpdf, 'info' => $info->input(), 'contrato' => $id]);
    }
}
