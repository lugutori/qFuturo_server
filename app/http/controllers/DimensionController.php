<?php

namespace qFuturo\Http\Controllers;

use Illuminate\Http\Request;

use qFuturo\Dimension;
use qFuturo\Http\Requests;
use qFuturo\Http\Controllers\Controller;

class DimensionController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $dimensions= Dimension::latest()->get();
        return view('dimensions.index',compact('dimensions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dimensions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Requests\DimensionRequest $request)
    {

        Dimension::create($request->all());
        return redirect('dimensions');     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $dimension = Dimension::findOrFail($id);
        //dd($option);
        return view('dimensions.show',compact('dimension'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $dimension = Dimension::findOrFail($id);
        return view('dimensions.edit',compact('dimension'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Requests\DimensionRequest $request, $id)
    {
        $option= Dimension::findOrFail($id);
        $option->update($request->all());
        return redirect('dimensions'); 

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
