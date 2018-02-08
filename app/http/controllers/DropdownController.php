<?php

namespace qFuturo\Http\Controllers;

use Illuminate\Support\Facades\Input;
use qFuturo\Dimension;
use qFuturo\Group;
use qFuturo\Http\Requests;

class DropdownController extends Controller
{
    public function groups(){
        $id = Input::get("id");
        $groups = Dimension::find($id)->groups;
        return $groups->lists('name', 'id');
    }
    public function categories(){
        $id = Input::get("id");
        $categories = Group::find($id)->categories;
        return $categories->lists('name', 'id');
    }
}
