<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ContactUs;
use App\User;
use Auth;
use Validator;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Should only be available to logged in users.
     *
     * @return \Illuminate\Http\Response
     */
    public function accountdetails()
    {

        return view('accountdetails');
    }
  
    /**
     * Should only be available to logged in users.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirmation()
    {

        return view('confirmation');
    }
  

    /**
     * Send a contact form to a staff member
     *
     * @return \Illuminate\http\Response
     */
    public function submitQuery(Request $request)
    {
        $firstname = $request->input('firstname');
        $email = $request->input('email');
        $question = $request->input('question');

        $contact = new ContactUs;

        $contact->firstname = $firstname;
        $contact->email = $email;
        $contact->question = $question;

        $contact->save();

        return redirect('home')->withSuccessMessage('Query successfully submitted');

    }

    public function update(Request $request){

        $user = User::where('id', Auth::user()->id)->firstOrFail();
    
        $user->firstname = $request->input('firstname');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->postcode = $request->input('postcode');
        $user->telephone = $request->input('telephone');

        $user->save();

        return redirect('home');


    }

}
