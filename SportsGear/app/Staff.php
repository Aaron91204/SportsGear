<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //Assignable attributes
    protected $fillable= array('firstname','surname','email','username', 'password');
}
