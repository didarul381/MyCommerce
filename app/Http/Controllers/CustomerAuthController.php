<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Session;
class CustomerAuthController extends Controller
{
        private $customer;
    public function index()
    {
        return view('customer.index');
    }
    public function login(Request $request)
    {
        //  return $request;
        
    //    $this->customer=Customer::where('email',$request->email)->first();
        $this->customer=Customer::where('email',$request->email)->first();
    
       if( $this->customer){
      
        if(password_verify($request->password, $this->customer->password))
        {
             
            Session::put('customer_id', $this->customer->id);
            Session::put('customer_name', $this->customer->name);
            return redirect('customer-dashboard');
        }else{
            return back()->with('message','invalid password.');
        }

       }else{
        return back()->with('message','invalid email address.');
       }
    //    $this->customer=Customer::where('password',$request->password);
    }

    public function register(Request $request)
    {
        return $request->all();
    }

    public function dashboard()
    {
        return view('customer.dashboard');
    }

    public function logout()
    {
        Session::forget('customer_id');
        Session::forget('customer_name');

        return redirect('/');
    }
}
