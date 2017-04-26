<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
<<<<<<< Updated upstream
            'firstname' => 'required|max:255|string|',//regex:%[^0-9$]%', //will not accept a number as correct data
            'surname' => 'required|max:255|regex:%[^0-9$]%', //will not accept a number as correct data
            'address' => 'required|max:255',
            'postcode' => 'required|size:8|regex:^[a-zA-Z]{1,2}[0-9][0-9A-Za-z]{0,1} {0,1}[0-9][A-Za-z]{2}$^', //format of AA45 8TY
            'telephone' => 'required|numeric|regex:^(\d{11})$^', //phone number must be size 11 and numeric
=======
            'firstname' => 'required|max:255|regex:%[^0-9$]%', //will not accept a number as correct data
            'surname' => 'required|max:255|regex:%[^0-9$]%', //will not accept a number as correct data
            'address' => 'required|max:255',
            'postcode' => 'required|size:8|regex:/^[a-zA-Z]{1,2}[0-9][0-9A-Za-z]{0,1} {0,1}[0-9][A-Za-z]{2}$/', //format of AA45 8TY
            'telephone' => 'required|numeric|size:11', //phone number must be size 11 and numeric
>>>>>>> Stashed changes
            'email' => 'required|email|max:255|unique:users',
            'username'=> 'required|max:255',
            'password' => 'required|confirmed|min:8|regex:/^(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
            'surname' => $data['surname'],
            'address' => $data['address'],
            'postcode' => $data['postcode'],
            'telephone' => $data['telephone'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
