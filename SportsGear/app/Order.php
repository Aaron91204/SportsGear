<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //Assignable attributes
    protected $fillable= array('product_Id','quantity','category', 'customer_Id', 'totalCost');

    //Relationships
    public function customer(){
    	return $this->belongsTo('Customer');
    }

    public  function productOrders(){
    	return $this->hasMany('ProductOrder');
    }
}
