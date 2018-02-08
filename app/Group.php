<?php

namespace qFuturo;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable =
        [
            'name',
            'dimension_id'
        ];

    public function categories()
    {
        return $this->hasMany('qFuturo\Category');
    }

    public function dimension()
    {
        return $this->belongsTo('qFuturo\Dimension');
    }

    public function questions()
    {
        return $this->hasMany('qFuturo\Question');
    }
}
