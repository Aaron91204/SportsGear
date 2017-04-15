<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = "products";
	public $timestamps = false;
    //Assignable attributes
    protected $fillable= array('product_Name', 'slug', 'category', 'quantity','img','cost');

    //Relationships
    public function productOrder(){
    	return $this->belongsToMany('App\ProductOrder', 'foreign_key');

    }
}
