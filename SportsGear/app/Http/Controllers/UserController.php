<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ContactUs;
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

        /*$data = [
            'firstaname'=>$firstname,
            'email' => $email, 
            'question' => $question
            ];


        $validator = Validator::make($data, [
                        'firstname' => 'required',
                        'email' => 'required|min:8',
                        'question' => 'required'
                    ]);
*/
        /*if ($validator->fails())
        {
          return redirect('fail')->withSuccessMessage('Fill out all fields');
        }*/

        $contact = new ContactUs;

        $contact->firstname = $firstname;
        $contact->email = $email;
        $contact->question = $question;

        $contact->save();

        return redirect('home')->withSuccessMessage('Query successfully submitted');

    }
}
