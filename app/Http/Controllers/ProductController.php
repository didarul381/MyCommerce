<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        return view('admin.product.index',[
            'categories'=>Category::all(),
            'sub_categories'=>SubCategory::all(),
            'brands'=>Brand::all(),
            'units'=>Unit::all(),

        ]);
    }

    public function getSubCategory(){
        
        return response()->json(SubCategory::where('category_id',$_GET['id'])->get());
    }

    public function create(Request $request ){
        Product::newProduct($request);
        return back()->with('message','Product info created successfully.');
    }

    public function manage (){

        return view('admin.product.manage',['products'=>Product::all()]);
    }
    public function edit ($id){

        return view('admin.product.edit',['product'=>Product::find($id)]);
    }

    public function update (Request $request,$id){

        Product::updatedProduct($request,$id);

        return redirect('product/manage')->with('message','Product info updated successfully.');
    }

    public function delete ($id){

        Product::deleteProduct($id);

        return redirect('product/manage')->with('message','Product info deleted successfully.');
    }
}


