<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class StaffLoginController extends Controller
{

	public function __construct()
	{
		$this->middleware('guest:staff');
	}

    public function showLoginForm()
    {

    	return view('auth.staff-login');

    }

    public  function login(Request $request)
    {
    	//validate form data
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:6',
    	]);

    	//Attempt to log user in
    	//attempt() hashes password
    	if(Auth::guard('staff')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember))
    	{
    		//if successful then redirect to intended location
    		return redirect()->intended(route('staff.dashboard'));
    	}
    	
    	//if unsuccessful then redirect to login with the form data
    	return redirect()->back()->withInput($request->only('email','remember'));
    }
}
