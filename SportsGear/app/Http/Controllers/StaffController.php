<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\User;
use App\Order;
use App\ContactUs;
use App\Product;
use App\Requests;
use DB;
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


    public function show($id)
    {
        $order = Order::find($id);
        return view('staff-view-order')->withOrder($order);
        /*
        $order = Order::find($id);
        return view('staff-view-order')->with('staff.show', $order);
        */
    }
    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function staffRegister()
    {
        return view('staff-register');
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
     * Show details of all customer orders
     *
     * @return \illuminate\Http\Response 
     */
    public function viewOrders()
    {

        $orders = Order::all();
        return view('staff-view-orders')->with('orders', $orders);
    }
    /*
    public function viewOrder($id)
    {
        $order = Order::all();
        return view('staff-view-order')->with('order', $order);
    }
    */

    /**
     * Show update products form.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateProducts(){
        $product=Product::all();
        return view('update-products')->with('product',$product);
    }

    /**
     * Display the specified category view.
     *
     * @return \Illuminate\Http\Response
     */
    public function category(Request $request)
    {   
        $products = Product::where('category', '=', $request->category)->get();
        return view('staff-category')->with('products', $products);
    }

    /**
     * Get all notifications from users.
     *
     * @return \Illuminate\Http\Response
     */
    public function getNotifications()
    {
        $notifications = ContactUs::all();

        return view('notifications')->with('notifications', $notifications);
    }
     /**
     * Updates product details.
     *
     * @param Request $request
     * @param String $id
     * @return \Illuminate\Http\Response
     */
    public function storeUpdateProduct(Request $request, $id)
    {

        $product = Product::where('id', '=', $id)->firstOrFail();

        $product->product_name = $request->product_name[$id];
        $product->slug = $request->slug[$id];
        $product->quantity = $request->quantity[$id];
        $product->cost = $request->cost[$id];

        $product->save();
        
        return redirect()->route('staff.updateProducts');
    }

    /**
     * Show the categories page
     *
     * @return \Illuminate\Http\Response
     */    
    public function categories(){
        $products=Product::select('category')->distinct()->orderBy('category')->get();
        return view('staff-categories')->with('products',$products);
    }

    /**
     * Clears notification from contact table.
     *
     * @return \Illuminate\Http\Response
     */
    public function clear(Request $request)
    {
        DB::table('ContactUs')->where('id','=',$request->id)->delete();

        $notifications = ContactUs::all();

        return view('notifications')->with('notifications', $notifications)->withMessage('Notification cleared!');
    }
    /**
     * Show update staff details.
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
        return redirect('staff');
    }

    /**
     * Create a new Staff member.
     *
     * @param  Request  $data
     * @return \Illuminate\Http\Response
     */
    protected function store(Request $data)
    {
        Staff::create([
            'firstname' => $data->firstname,
            'surname' => $data->surname,
            'email' => $data->email,
            'username' => $data->username,
            'password' => bcrypt($data->password),
        ]);

        return view('staff');
    }
}
