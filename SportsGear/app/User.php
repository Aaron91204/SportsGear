<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','surname','address', 'postcode','telephone','email', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Relationships
    public function order(){
        return $this->hasMany('App\Order', 'foreign_key');
    }

    public function contact(){
        return $this->hasMany('App\Contact', 'foreign_key', 'email');
    }
}
