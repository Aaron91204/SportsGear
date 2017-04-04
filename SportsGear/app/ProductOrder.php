<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    //Assignable attributes
    protected $fillable= array('product_Id','order_Id');

    //Relationships
    public function order(){
    	return $this->belongsTo('App\Order','foreign_key');

    }

    public function product(){
    	return $this->hasOne('App\Product','foreign_key');
    	
    }
}
