<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{

    protected $table = 'product_order';
    public $timestamps = false;
    //Assignable attributes
    protected $fillable= array('order_id', 'product_Id','quantity');

    //Relationships
    public function order(){
    	return $this->hasOne('App\Order','foreign_key');

    }

    public function product(){
    	return $this->hasOne('App\Product','foreign_key');
    	
    }
}
