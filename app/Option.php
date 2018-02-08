<?php

namespace qFuturo;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    //
    protected $fillable =
        [
            'body',
            'is_right',
            'question_id',
            'category_id'
        ];

    public function question()
    {
        return $this->belongsTo('qFuturo\Question');
    }
    public function category()
    {
        return $this->belongsTo('qFuturo\Category');
    }
}

