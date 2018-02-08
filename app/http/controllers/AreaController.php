<?php

namespace qFuturo\Http\Controllers;

use Illuminate\Http\Request;

use qFuturo\Area;
use qFuturo\Category;
use qFuturo\Http\Requests;
use qFuturo\Http\Controllers\Controller;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $areas= Area::latest()->get();
        return view('areas.index',compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::with(['group'=> function($query){$query->select('id','name');}])->get();
        $categories = $categories->where('group.name','Areas de desempeño laboral que generan Intereses y preferencias');
        $categories = $categories->lists('name','id');
        return view('areas.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        Area::create($request->all());
        return redirect('areas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $area = Area::findOrFail($id);
        return view('areas.show',compact('area'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $area = Area::findOrFail($id);
        $categories = Category::lists('name','id');
        return view('areas.edit',compact('area','categories'));
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
        $area= Area::findOrFail($id);
        $area->update($request->all());
        return redirect('areas');
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
