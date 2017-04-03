<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    //Assignable attributes
    protected $fillable= array('productId','orderId');

    //Relationships
    public function order(){
    	return $this->belongsTo('Order');

    }

    public function product(){
    	return $this->hasOne('Product');
    	
    }
}
