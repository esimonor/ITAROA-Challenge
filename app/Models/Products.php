<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function product()
    {
    	return $this->belongsTo('App\Store');
    }
}