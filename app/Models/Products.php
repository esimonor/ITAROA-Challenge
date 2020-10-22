<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    public function product()
    {
    	return $this->belongsTo('App\Establishments');
    }
}