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
            'password'=>'required'
       ]);
        
       
      
        
        $userInfo = Admin::where('email','=', $request->email)->first();
        error_log($request->email);
        if(!$userInfo){
            return back()->with('correoinvalido','No se reconoce su correo electrónico.');
        }else{
            if($userInfo->bloqueado){
                    
                return back()->with('bloqueado','Su cuenta ha sido bloqueada. Contacte al administrador para desbloquearla.');
            }
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);

                $userInfo->intentos = 0;
                $save = $userInfo->save();

                //return redirect('admin/dashboard');
                return redirect('contratos');

            }else{

                
                $userInfo->intentos =  $userInfo->intentos + 1;
                $save = $userInfo->save();

                if($userInfo->intentos == 3){
                    $userInfo->bloqueado = true;
                    $userInfo->save();
                    return back()->with('bloqueado','Su cuenta ha sido bloqueada. Contacte al administrador para desbloquearla.');
                }


                return back()->with('passwordinvalida','Contraseña incorrecta.');
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
