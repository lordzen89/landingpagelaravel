<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Models\Contrato;

class MainController extends Controller
{
    function login(){
        
        return view('auth.login');
    }

    function register(){
        return view('auth.register');
    }

    function save(Request $request){
       // return $request->input();

       $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:5|max:12'
       ]);


         $admin = new Admin;
         $admin->name = $request->name;
         $admin->email = $request->email;
         $admin->password = Hash::make($request->password);
         $save = $admin->save();

         if($save){
            return back()->with('success','Nuevo usuario agregado exitosamente.');
         }else{
             return back()->with('fail','Algo salió mal, intente más tarde.');
         }
    
    }

    function check(Request $request){
       
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
       ]);
        
       
      
        
        $userInfo = Admin::where('email','=', $request->email)->first();
        error_log($request->email);
        if(!$userInfo){
            return back()->with('fail','No se reconoce su correo electrónico.');
        }else{
            //check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                //return redirect('admin/dashboard');
                return redirect('contratos');

            }else{
                return back()->with('fail','Contraseña incorrecta.');
            }
        }  


    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect(('/auth/login'));
        }

    }

    function dashboard(){
        $data = ['LoggedUserInfo'=>Admin::where('id', '=', session('LoggedUser'))->first()];
        if($data['LoggedUserInfo']){
            $contrato = Contrato::select('contratos.idcontrato','contratos.rut' ,'tipocontrato.nombretipocontrato', 
                'contratos.idusuario', 'contratos.observacion', 'contratos.ruta', 'contratos.fechahora')
                ->join('tipocontrato','tipocontrato.idtipocontrato','=','contratos.tipocontrato' )
                ->get();
            //error_log(print_r($data, TRUE));
            return view('contratos.index',  ['contrato' => $contrato, 'data' => $data]);
        }
        else{
            
            return "no está logueado.";
        }
    }


}
