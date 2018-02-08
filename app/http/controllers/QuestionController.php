<?php

namespace qFuturo\Http\Controllers;

use Illuminate\Http\Request;

use qFuturo\Dimension;
use qFuturo\Group;
use qFuturo\Http\Requests;
use qFuturo\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $questions= Question::latest()->get();
        return view('questions.index',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $dimensions = Dimension::lists('name','id');
        return view('questions.create',compact('dimensions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

        $question_type=$request['question_type'];
        $optionNum = $request['optionNum'];
        $group = Group::findOrFail($request['group_id']);
        $question= Question::create($request->all());
        if($optionNum!=null) {
            return view('options.create', compact('question_type', 'optionNum', 'group','question'));
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
        $question = Question::findOrFail($id);
        return view('questions.show',compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $question = Question::findOrFail($id);
        $dimensions = Dimension::lists('name','id');
        return view('questions.edit',compact('question','dimensions'));
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
        $question= Question::findOrFail($id);
        $question->update($request->all());
        return redirect('questions');
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
