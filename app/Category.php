<?php

namespace qFuturo;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =
        [
            'name', 'group_id'
        ];
    public function group()
    {
        return $this->belongsTo('qFuturo\Group');
    }

    public function questions()
    {
        return $this->hasMany('qFuturo\Question');
    }
    public function options()
    {
        return $this->hasMany('qFuturo\Option');
    }
}
