<?php

namespace qFuturo\Http\Controllers;

use Illuminate\Http\Request;
use qFuturo\Option;
use qFuturo\Question;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $options= Option::latest()->get();
        return view('options.index',compact('options'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('options.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $question_id = $request['question_id'];
        $bodies = $request['bodies'];
        $numOptions = count($bodies);
        $rightChoice = $request['right'];
        $categories = $request['category_ids'];
        $question = Question::findOrFail($question_id);
        for($i=0;$i<$numOptions;$i++){
            $option = new Option(['body'=>$bodies[$i], 'question_id'=>$question_id]);
            if($rightChoice == null){
                $option->category_id=$categories[$i];
            }else {
                $isTrue = false;
                if ($i == $rightChoice) {
                    $isTrue = true;
                }
                $option->is_right=$isTrue;
            }
            $question->options()->save($option);
        }
        return redirect('questions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        
        $option = Option::where(['codigo'=>$id])->firstOrFail();
        //dd($option);
        return view('options.show',compact('option'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $option = Option::where(['codigo'=>$id])->firstOrFail();
        return view('options.edit',compact('option'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $option= Option::findOrFail($id);
        $option->update($request->all());
        return redirect('option'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
