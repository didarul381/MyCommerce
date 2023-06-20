<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Session;
use ShoppingCart;
class CheckoutController extends Controller
{
     private $customer,$order,$orderDetail;
    public function index()
    {
         if(Session::get('customer_id')){
            $this->customer=Customer::find(Session::get('customer_id'));
         }else{
            $this->customer='';
         }
        return view('website.checkout.index',[
            'customer'=>$this->customer
        ]);
    }

     private function orderCustomerValidate($request)
     {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:customers,email',
            'mobile'=>'required|unique:customers,mobile',
            'delivary_address'=>'required',
        ]);
     }


    public function newCashOrder(Request $request){
    
        //  return $request;

        // return ShoppingCart::all();
        if(Session::get('customer_id')){
            $this->customer=Customer::find(Session::get('customer_id'));
        }else{
           
            // $this->validate($request,[
            //     'name'=>'required',
            //     'email'=>'required|unique:customers,email',
            //     'mobile'=>'required|unique:customers,mobile',
            //     'delivary_address'=>'required',
            // ]);
            $this->orderCustomerValidate($request);
            $this->customer= Customer::newCustomer($request);
            Session::put('customer_id', $this->customer->id);
            Session::put('customer_name', $this->customer->name);
        }
        // $this->customer=new Customer();
        // $this->customer->name=$request->name;
        // $this->customer->email=$request->email;
        // $this->customer->mobile=$request->mobile;
        // $this->customer->password=bcrypt($request->mobile);
        // $this->customer->save();

        // Session::put('customer_id', $this->customer->id);
        // Session::put('customer_name', $this->customer->name);


        // $this->order=new Order();
        // $this->order->customer_id    =$this->customer->id;
        // $this->order->order_date  =date('Y-m-d');
        // $this->order->order_timestamp =strtotime(date('Y-m-d'));
        // $this->order->order_total     =Session::get('order_total');
        // $this->order->tax_total       =Session::get('tax_total');
        // $this->order->shpping_total   =Session::get('shpping_total');
        // $this->order->delivery_address =$request->delivary_address;
        // $this->order->payment_type     =$request->payment_type;
        // $this->order->save();
        
      $this->order=Order::newOrder($request,$this->customer->id);

        OrderDetail::newOrderDetail($this->order->id);

        return redirect('/complete-order')->with('message','Congratulationsuccessfully...order success.');
    }

    public function completeOrder(){

        return view('website.checkout.complete-order');
    }
}
