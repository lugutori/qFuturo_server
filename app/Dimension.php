<?php

namespace qFuturo;

use Illuminate\Database\Eloquent\Model;

class Dimension extends Model
{
	protected $fillable = 
	[
	'name',
	];
	public function groups()
    {
        return $this->hasMany('qFuturo\Group');
    }
    public function questions()
    {
        return $this->hasMany('qFuturo\Question');
    }
}
