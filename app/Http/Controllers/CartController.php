<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ShoppingCart;
use App\Models\Product;

class CartController extends Controller
{
   private $product;

   public function index(Request $request, $id){

      $this->product=Product::find($id);
      ShoppingCart::add($this->product->id, $this->product->name, $request->qty, $this->product->selling_price, ['image' => $this->product->image]); 

      return redirect('/show-cart');

   }
   public function show(){
      // return ShoppingCart::all();
      return view('website.cart.index',['cart_products'=> ShoppingCart::all()]);
     }

     public function update(Request $request,$id){
      // return ShoppingCart::all();
      ShoppingCart::update($id,$request->qty);
      return redirect('/show-cart')->with('message', 'Cart Product update successfully');
      
     }

     public function remove($id){
      // return ShoppingCart::all();
      ShoppingCart::remove($id);
      return redirect('/show-cart')->with('message', 'Cart Product delete successfully');
      
     }

    
}
