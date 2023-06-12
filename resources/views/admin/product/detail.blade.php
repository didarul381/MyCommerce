@extends('admin.master')

@section('body')
<div class="row mt-3">
    <div class="col-lg-12">
    <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Table</h4>
                                <h6 class="card-subtitle">Data table example</h6>
                                
                                <div class="table-responsive m-t-40">
                                <h4 class="text-center text-success">{{Session::get('message')}}</h4> 
                                    <table id="myTable" class="table table-striped border">
                                       
                                             
                                                <tr>  
                                                    <th>Product Name</th>
                                                    <td>{{$product->name}}</td>
                                                </tr>
                                                <tr> 
                                                <th>Product Category Name</th>
                                                <td>{{$product->category->name}}</td>
                                                   </tr> 
                                                <th>Category Description</th>
                                                <td>{{$product->short_description}}</td>
                                                <th>Product Stock Amount</th>
                                                <th>Product regural price</th>
                                                <th>Product selling price</th>
                                                <tr>
                                                <th> Img</th>
                                                <td><img src="{{asset($product->image)}}" width="80" height="80" alt="{{$product->image}}"></td>
                                                </tr>
                                               <tr>
                                               <th> Other Image:</th>
                                                 @foreach($product->othetImages as $othetImage)
                                                <td>
                                                <img src="{{asset($othetImage->image)}}" width="80" height="80" alt="{{$product->image}}">
                                                </td>
                                                 @endforeach

                                               </tr>
                                                <tr>
                                                <th>Publication Status</th>
                                                <td>{{$product->status==1?'published':'unpublished'}}</td>
                                                </tr>
                                            
                                           
                                        
                                       
                                               
                                    </table>
                                </div>
                            </div>
                        </div>
    </div>
</div>


@endsection