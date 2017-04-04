<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //Assignable attributes
    protected $fillable= array('product_Id','quantity','category', 'customer_Id', 'totalCost');

    //Relationships
    public function customer(){
    	return $this->belongsTo('App\Customer');
    }

    public  function productOrders(){
    	return $this->hasMany('App\ProductOrder', 'foriegn_key');
    }
}
