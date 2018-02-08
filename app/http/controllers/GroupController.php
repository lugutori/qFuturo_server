<?php

namespace qFuturo\Http\Controllers;

use Illuminate\Http\Request;

use qFuturo\Dimension;
use qFuturo\Group;
use qFuturo\Http\Requests;


class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $groups= Group::latest()->get();
        return view('groups.index',compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       $dimensions = Dimension::lists('name','id');
       return view('groups.create',compact('dimensions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Requests\GroupRequest $request)
    {
        Group::create($request->all());
        return redirect('groups');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $group = Group::findOrFail($id);
        return view('groups.show',compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $group = Group::findOrFail($id);
        $dimensions = Dimension::lists('name','id');
        return view('groups.edit',compact('group','dimensions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Requests\GroupRequest $request, $id)
    {
        $group= Group::findOrFail($id);
        $group->update($request->all());
        return redirect('groups');
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
