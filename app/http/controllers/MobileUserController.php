<?php

namespace qFuturo\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use qFuturo\Area;
use qFuturo\Http\Requests;
use qFuturo\Http\Controllers\Controller;
use qFuturo\MobileUser;

class MobileUserController extends Controller
{
    public function register(){
        $data = Input::get('_user');

        $headers = [
            'Access-Control-Allow-Origin'      => '*',
            'Access-Control-Allow-Methods' => 'GET, PUT, POST, DELETE, HEAD, OPTIONS'
        ];
        $user = MobileUser::where('email',$data[5])->first();
        if($user==null) {

            $construct = [
                'first_name' => $data[0],
                'last_name' => $data[1],
                'department' => $data[2],
                'city' => $data[3],
                'studies' => $data[4],
                'email' => $data[5],
                'secret_word' => $data[6],
                'password' => base64_decode($data[7])
            ];

            MobileUser::create($construct);
            $response = "OK";
        }else{
            $response = "Error creando usuario (el correo ya existe)";
        }
        return Response::json( $response, 200, $headers);

    }
    public function dologin(){
        $data = Input::get('_user');
        $email = $data[0];
        $pass = $data[1];
        $user = MobileUser::where('email',$email)->first();
        if($user==null){
            $response = "Ese mail no está registrado";
        }elseif($user->password != $pass) {
            $response = "La contraseña es inválida";
        }else{
            $response="OK";
        }

        $headers = [
            'Access-Control-Allow-Origin'      => '*',
            'Access-Control-Allow-Methods' => 'GET, PUT, POST, DELETE, HEAD, OPTIONS'
        ];
        return Response::json( $response, 200, $headers);
    }

    public function resetpassword(){

        // $questions = Question::with(['options','group','category','options.category'])->where('groups.name','=',$group_name);

        $areas = Area::with(['category'=> function($query){$query->select('id','name');}])->get();
        $headers = [
            'Access-Control-Allow-Origin'      => '*',
        ];

        return Response::json( $areas, 200, $headers);
    }
    public function index()
    {
        $users= MobileUser::latest()->get();
        return view('users.index',compact('users'));
    }

}
