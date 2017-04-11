<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //Assignable attributes
    protected $fillable= array('name','email', 'question');

    //Relationships
    public function customer(){
    	return $this->belongsTo('App\User', 'foreign_key', 'email');
    }
}
