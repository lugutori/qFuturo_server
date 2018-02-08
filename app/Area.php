<?php

namespace qFuturo;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = array('category_id','salary','growth','employment','study_time');
    public function category()
    {
        return $this->belongsTo('qFuturo\Category');
    }
}
