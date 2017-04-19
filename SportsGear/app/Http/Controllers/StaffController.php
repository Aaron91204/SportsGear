<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use Auth;

class StaffController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        //Middleware to ensure only logged in staff can access these pages
        $this->middleware('auth:staff');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staff');
    }

    /**
     * Show staff details form.
     *
     * @return \Illuminate\Http\Response
     */
    public function accountDetails(Request $request)
    {
        
        return view('staff-account-details');
    }

    /**
     * Show add staff form.
     *
     * @return \Illuminate\Http\Response
     */
    public function addStaff()
    {
        return view('add-staff');
    }

    /**
     * Show update products form.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateProducts()
    {
        return view('update-products');
    }

    /**
     * Show update products form.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Staff::where('id', Auth::user()->id)->firstOrFail();
    
        $user->firstname = $request->input('firstname');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');

        $user->save();
        return view('staff');
    }
}
