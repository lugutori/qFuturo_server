<?php

namespace qFuturo;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = array('text','code','question_type','dimension_id','group_id','category_id');

    public function dimension()
    {
        return $this->belongsTo('qFuturo\Dimension');
    }
    public function group()
    {
        return $this->belongsTo('qFuturo\Group');
    }
    public function category()
    {
        return $this->belongsTo('qFuturo\Category');
    }
    public function options()
    {
        return $this->hasMany('qFuturo\Option');
    }


}
