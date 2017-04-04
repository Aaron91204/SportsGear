<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //Assignable attributes
    protected $fillable= array('firstname','surname','address', 'postcode','telephone','email', 'username', 'password');

    //Relationships
    public function order(){
    	return $this->hasMany('App\Order', 'foreign_key');
    }
}
