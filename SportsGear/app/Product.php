<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Assignable attributes
    protected $fillable= array('product_Name','category', 'quantity','cost(£)');

    //Relationships
    public function productOrder(){
    	return $this->belongsToMany('ProductOrder');

    }
}
