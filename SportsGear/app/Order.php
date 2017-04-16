<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table = 'order';
	public $timestamps = false;

    //Assignable attributes
    protected $fillable= array('customer_Id','totalCost');

    //Relationships
    public function customer(){
    	return $this->belongsTo('App\User');
    }

    public  function productOrders(){
    	return $this->hasMany('App\ProductOrder', 'foriegn_key');
    }
}
