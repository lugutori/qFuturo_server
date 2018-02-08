<?php

namespace qFuturo;

use Illuminate\Database\Eloquent\Model;

class MobileUser extends Model
{
    protected $fillable = array('first_name','last_name','department','city','studies','email','secret_word','password');
    
}
