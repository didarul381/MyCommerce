@extends('admin.master')

@section('body')
<div class="row mt-3">
    <div class="col-lg-12">
    <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Order Information.</h4>
                                <h6 class="card-subtitle">Data table example</h6>
                                
                                <form action="{{route('admin.update-order',['id'=>$order->id])}}" method="POST">
                                    @csrf
                                    <h4 class="text-center text-success">{{Session::get('message')}}</h4> 
                                    <div class="row mb-3">
                                        <label for="" class="col-md-3">Order Id</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" readonly value="{{$order->id}}"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-3">Order Total</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" readonly value="{{$order->order_total}}"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-3">Order Status</label>
                                        <div class="col-md-9">
                                           <select name="order_status" id="" class="form-control">
                                            <option value="Pending">Pending</option>
                                            <option value="Processing">Processing</option>
                                            <option value="Complete">Complete</option>
                                            <option value="Cancel">Cancel</option>
                                            
                                           </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-3">Delivary address</label>
                                        <div class="col-md-9">
                                          <textarea class="form-control" name="delivary_address" id="" cols="30" rows="10">{{$order->delivery_address}}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-3"></label>
                                        <div class="col-md-9">
                                          <input type="submit" class="btn btn-success w-50"  value="Update Order"/>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
    </div>
</div>


@endsection