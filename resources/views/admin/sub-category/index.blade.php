@extends('admin.master')

@section('body')
<div class="row mt-3">
<div class="col-lg-12">
            <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Sub Category Form</h4>
                               <hr>
                               <!-- enctype="multipart/form-data" -->
                               <h4 class="text-center text-fuchsia-800">{{session('message')}}</h4>
                                <form action="{{route('sub-category.new')}}" method="POST" enctype="multipart/form-data"  class="form-horizontal p-t-20">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Category Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <select class="form-control" name="category_id" id="">
                                                    <option value="" disabled selected>---seleced categoru-----</option>
                                                  @foreach ($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Sub Category Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                
                                                <input type="text" class="form-control" name="name" id="exampleInputuname3" placeholder="Sub Category Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputEmail3" class="col-sm-3 control-label">Category Description  <span class="text-danger">*</span> </label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                              
                                                <textarea  class="form-control" name="description" id="exampleInputEmail3" placeholder="Category Description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="form-label col-sm-3 control-label" for="web">Category Img</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="image" id="input-file-now" class="dropify" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword4" class="col-sm-3 control-label">Password*</label>
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