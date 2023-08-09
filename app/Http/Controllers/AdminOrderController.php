<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class AdminOrderController extends Controller
{
      private $order;
    public function index()
    {
        return view('admin.order.index',['orders'=>Order::orderBy('id','desc')->get()]);
    }


    public function detail($id)
    {
        return view('admin.order.detail',['order'=>Order::find($id)]); 
    }
    public function edit($id)
    {
        return view('admin.order.edit',['order'=>Order::find($id)]); 
    }
    public function update(Request $request,$id)
    {
        //  return $request;
        if( $request->order_status=='Pending'){
              
            return back()->with('message','Order Info update successfully');
        }
        else if($request->order_status=='Processing'){
             $this->order=Order::find($id);
             $this->order->order_status= $request->order_status;
             $this->order->delivery_address= $request->delivary_address;
             $this->order->delivery_status= $request->order_status;
             $this->order->payment_status= $request->order_status;
             $this->order->save();
             return redirect('/admin/all-order')->with('message','Order Info update successfully');
        }
        else if($request->order_status=='Complete'){
            
            $this->order=Order::find($id);
             $this->order->order_status= $request->order_status;
             $this->order->delivery_status= $request->order_status;
             $this->order->payment_status= $request->payment_status;
             $this->order->save();
             return redirect('/admin/all-order')->with('message','Order Info update successfully');
        }
        else if($request->order_status=='Cancel'){
            
        }
    
       
        // return view('admin.order.edit',['order'=>Order::find($id)]); 
    }
    public function showInvoice($id)
    {
        return view('admin.order.invoice',['orders'=>Order::find($id)]); 
    }
    public function printInvoice($id)
    {
        return view('admin.order.print-invoice',['orders'=>Order::find($id)]); 
    }
    public function delete($id)
    {
       return $id;
    }
}
