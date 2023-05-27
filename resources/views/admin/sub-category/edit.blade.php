@extends('admin.master')

@section('body')

            <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Category Form</h4>
                               <hr>
                               <!-- enctype="multipart/form-data" -->
                               
                                <form action="{{route('sub-category.update',['id'=> $sub_category->id])}}" method="POST" enctype="multipart/form-data"  class="form-horizontal p-t-20">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Category Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <select class="form-control" name="category_id" id="">
                                                  
                                                 
                                                <option value="{{$sub_category->category->id}}">{{$sub_category->category->name}}</option>
                                                
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Sub Category Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                
                                                <input type="text" class="form-control" value="{{$sub_category->name}}" name="name" id="exampleInputuname3" placeholder="Category Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputEmail3" class="col-sm-3 control-label">Category Description  <span class="text-danger">*</span> </label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                              
                                                <textarea  class="form-control" name="description" id="exampleInputEmail3" placeholder="Category Description">{{$sub_category->description}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="form-label col-sm-3 control-label" for="web">Category Img</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="image" id="input-file-now" class="dropify" />
                                            <img src="{{asset($sub_category->image)}}" height="50" width="50" alt="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                            <label for="" class="me-3">
                                                <input type="radio" name="status" {{$sub_category->status==1?'checked':''}} value="1" checked id=""> Published </label>
                                          
                                           <label for="">
                                            <input type="radio" name="status"  {{$sub_category->status==2 ?'checked':''}} value="2" id="">UnPublished </label>
                                      
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group row m-b-0">
                                        <div class="offset-sm-3 col-sm-9">
                                            <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update Info</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
    
                    </div>

    </div>

@endsection