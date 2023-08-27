@extends('admin.master')

@section('body')
<div class="row mt-3">
    <div class="col-lg-12">
    <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Order Information.</h4>
                                <h6 class="card-subtitle">Data table example</h6>
                                
                                <div class="table-responsive m-t-40">
                                <h4 class="text-center text-success">{{Session::get('message')}}</h4> 
                                    <table id="myTable" class="table table-striped border">
                                        <thead>
                                            <tr>
                                                <th>Sl No</th>
                                                <th>Order No</th>
                                                <th>Order Date</th>
                                                <th>Category Name</th>
                                                <th>Order Total</th>
                                                <th> Payment Status </th>
                                                <th>Oredr Status</th>
                                                <th>Action</th>
                                                
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($orders as $order)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->order_date}}</td>
                                                <td>{{$order->customer->name.'('.$order->customer->mobile.')'}}</td>
                                                <td>{{$order->order_total}}</td>
                                                <td>{{$order->payment_status}}</td>
                                                <td>{{$order->order_status}}</td>
                                    
                                                <!-- <td>{{$order->status==1?'published':'unpublished'}}</td> -->
                                                <td>
                                                <a href="{{route('admin.order-detail',['id'=>$order->id])}}" title="view oeder detail" class="btn btn-success btn-sm">
                                                        <i class="ti-reddit"></i>
                                                    </a>
                                                    <a href="{{route('admin.order-edit',['id'=>$order->id])}}"
                                                     class="btn btn-success {{$order->order_status =='Complete'?'disabled':''}}"
                                                    title="view order edit" class="btn btn-success btn-sm">
                                                        <i class="ti-reddit"></i>
                                                    </a>
                                                    <a href="{{route('admin.order-invoice',['id'=>$order->id])}}" title="order invoice" class="btn btn-success btn-sm">
                                                        <i class="ti-reddit"></i>
                                                    </a>
                                                    <a href="{{route('admin.order-print',['id'=>$order->id])}}" target="_blank" title="order print" class="btn btn-warning btn-sm">
                                                        <i class="ti-reddit"></i>
                                                    </a>
                                                    <a href="{{route('admin.order-delete',['id'=>$order->id])}}" 
                                                    class=" {{$order->order_status =='Cancel'?'btn btn-danger':'btn btn-danger disabled'}}"
                                                    title="order Delete" onclick="return confirm('Are you sure to delete');">
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