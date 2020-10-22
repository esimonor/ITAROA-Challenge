<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Establishments extends Model
{
    protected $table = 'establishment';

    public function product()
    {
    	return $this->hasMany('App\Models\Products');
    }
}

