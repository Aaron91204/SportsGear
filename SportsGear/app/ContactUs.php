<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
	public $table = "contactus";
    //Assignable attributes
    protected $fillable= array('firstname','email', 'question');


    //Relationships
    public function customer(){
    	return $this->belongsTo('App\User', 'foreign_key', 'email');
    }
}
