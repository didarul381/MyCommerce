@extends('admin.master')

@section('body')
<div class="row mt-3">
<div class="col-lg-12">
            <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Unit Form</h4>
                               <hr>
                               <!-- enctype="multipart/form-data" -->
                               <h4 class="text-center text-fuchsia-800">{{session('message')}}</h4>
                                <form action="{{route('unit.new')}}" method="POST"   class="form-horizontal p-t-20">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Unit Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                
                                                <input type="text" class="form-control" name="name" id="exampleInputuname3" placeholder="Unit Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Unit code <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                
                                                <input type="text" class="form-control" name="code" id="exampleInputuname3" placeholder="Unit code">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputEmail3" class="col-sm-3 control-label">Unit Description  <span class="text-danger">*</span> </label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                              
                                                <textarea  class="form-control" name="description" id="exampleInputEmail3" placeholder="Unit Description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                       
                                        <div class="col-sm-9">
                                            <label for="" class="me-3">
                                                <input type="radio" name="status" value="1" checked id=""> Published </label>
                                          
                                           <label for="">
                                            <input type="radio" name="status" value="2" id="">UnPublished </label>
                                      
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group row m-b-0">
                                        <div class="offset-sm-3 col-sm-9">
                                            <button type="submit" class="btn btn-success waves-effect waves-light text-white">Add a New Categpry</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
    
                    </div>

    </div>

@endsection