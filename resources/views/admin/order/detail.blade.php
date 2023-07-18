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
                                    <table  class="table table-striped border">
                                    
                                         <tr>
                                         <th>Order Id</th>
                                         <td>{{$order->id}}</td>
                                         </tr>

                                         <tr>
                                         <th>Order Date</th>
                                         <td>{{$order->order_date}}</td>
                                         </tr>

                                         <tr>
                                         <th>Order Total</th>
                                         <td>{{$order->order_total}}</td>
                                         </tr>

                                         <tr>
                                         <th>Tax Total</th>
                                         <td>{{$order->tax_total}}</td>
                                         </tr>

                                         <tr>
                                         <th>Shpping Total</th>
                                         <td>{{$order->shpping_total}}</td>
                                         </tr>
                                         <tr>
                                         <th>Delivary Status</th>
                                         <td>{{$order->delivary_status}}</td>
                                         </tr>

                                         <tr>
                                         <th>Payment Status</th>
                                         <td>{{$order->payment_status}}</td>
                                         </tr>
                                         <tr>
                                         <th>Payment Type</th>
                                         <td>{{$order->payment_type==1?'Cash':'Online'}}</td>
                                         </tr>
                                         <tr>
                                         <th>Currency</th>
                                         <td>{{$order->currency}}</td>
                                         </tr>
                                         <tr>
                                         <th>Transeation Id</th>
                                         <td>{{$order->transaction_id}}</td>
                                         </tr>
                                         
                                        </table>
                                </div>
                            </div>
                        </div>
    </div>
    <div class="card">
                 <div class="card-body">
                                <h4 class="card-title">Order Customer Information.</h4>
                               
                                
                                <div class="table-responsive m-t-40">
                                <h4 class="text-center text-success">{{Session::get('message')}}</h4> 
                                    <table  class="table table-striped border">
                                        <thead>
                                            <tr>
                                                
                                                <th>Customer Name</th>
                                                <th>Customer Number</th>
                                                <th> Customer Email </th>
                                                <th>Customer  Address</th>
                                               
                                                
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{$order->customer->name}}</td>
                                                <td>{{$order->customer->mobile}}</td>
                                                <td>{{$order->customer->email}}</td>
                                                <td>{{$order->customer->adress}}</td>
                                            </tr>
                                        </tbody>
                                        
                                        </table>
                                </div>
                            </div>
                        </div>
    </div>
    <div class="card">
                 <div class="card-body">
                                <h4 class="card-title">Order Product  Information.</h4>
                               
                                
                                <div class="table-responsive m-t-40">
                                <h4 class="text-center text-success">{{Session::get('message')}}</h4> 
                                    <table  class="table table-striped border">
                                        <thead>
                                            <tr>
                                                <th>Sl No</th>
                                                <th>Product Name</th>
                                                <th>Product Price</th>
                                                <th>Order Amount </th>
                                                <th>Total price</th>
                                                
                                               
                                                
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($order->orderDetails as $orderDetail)
                                            <tr>
                                                <th>{{$loop->iteration}}</th>
                                                <td>{{$orderDetail->product_name}}</td>
                                                <td>{{$orderDetail->product_price}}</td>
                                                <td>{{$orderDetail->product_qty}}</td>
                                                <td>{{$orderDetail->product_price * $orderDetail->product_qty }}</td>
                                                
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