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
                                        <thead>
                                            <tr>
                                                <th>Sl No</th>
                                                <th>Product Name</th>
                                                <th>Product Category Name</th>
                                                <th>Category Description</th>
                                                <th>Category Img</th>
                                                <th>Publication Status</th>
                                                <th>Action</th>
                                                
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($products as $product)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->category->name}}</td>
                                                <td>{{$product->short_description}}</td>
                                                <td><img src="{{asset($product->image)}}" width="80" height="80" alt="{{$product->image}}"></td>
                                                <td>{{$product->status==1?'published':'unpublished'}}</td>
                                                <td>
                                                    <a href="{{route('product.edit',['id'=>$product->id])}}" class="btn btn-success btn-sm">
                                                        <i class="ti-reddit"></i>
                                                    </a>
                                                    <a href="{{route('product.detail',['id'=>$product->id])}}" class="btn btn-success btn-sm">
                                                        <i class="ti-reddit"></i>
                                                    </a>
                                                    <a href="{{route('product.delete',['id'=>$product->id])}}"  onclick="return confirm('Are you sure to delete');" class="btn btn-success btn-sm">
                                                        <i class="ti ti-trash"></i>
                                                    </a>
                                                </td>
                                                
                                            </tr>
                                           @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
    </div>
</div>


@endsection