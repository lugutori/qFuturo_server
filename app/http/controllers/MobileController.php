<?php

namespace qFuturo\Http\Controllers;


use Illuminate\Support\Facades\Response;
use qFuturo\Area;
use qFuturo\Http\Requests;
use qFuturo\Question;

class MobileController extends Controller
{
    public function questionsforapp($id){

        switch($id){
            case 1:$group_name = 'Aptitudes base de competencias Clave';
                break;
            case 2:$group_name = 'Areas de desempeño laboral que generan Intereses y preferencias';
                break;
            case 3:$group_name = 'Motivaciones profundas';
                break;
            case 4:$group_name = 'Actitudes asociadas al éxito';
                break;
        }


       // $questions = Question::with(['options','group','category','options.category'])->where('groups.name','=',$group_name);

        $questions = Question::with(['options',
                                                'group'=> function($query){$query->select('id','name');},
                                                'category'=> function($query){$query->select('id','name');},
            'options.category'])->get();
        $questions = $questions->where('group.name',$group_name);



        $headers = [
            'Access-Control-Allow-Origin'      => '*',
        ];

        return Response::json( $questions, 200, $headers);
    }
    public function areasforapp(){

        // $questions = Question::with(['options','group','category','options.category'])->where('groups.name','=',$group_name);

        $areas = Area::with(['category'=> function($query){$query->select('id','name');}])->get();
        $headers = [
            'Access-Control-Allow-Origin'      => '*',
        ];

        return Response::json( $areas, 200, $headers);
    }

}
