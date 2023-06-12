@extends('admin.master')

@section('body')
<div class="row mt-3">
<div class="col-lg-12">
            <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Product Form</h4>
                               <hr>
                               <!-- enctype="multipart/form-data" -->
                               <h4 class="text-center text-fuchsia-800">{{session('message')}}</h4>
                                <form action="{{route('product.new')}}" method="POST" enctype="multipart/form-data"  class="form-horizontal p-t-20">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Category Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <select class="form-control" name="category_id" id="categoryId">
                                                    <option value="" disabled selected>---seleced categoru-----</option>
                                                  @foreach ($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Sub  Category Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <select class="form-control" name="sub_category_id" id="subCategory">
                                                    <option value="" disabled selected>---seleced sub categoru-----</option>
                                                  @foreach ($sub_categories as $sub_category)
                                                <option value="{{$sub_category->id}}">{{$sub_category->name}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Brand Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <select class="form-control" name="brand_id" id="">
                                                    <option value="" disabled selected>---seleced Brand -----</option>
    
                                                  @foreach ($brands as $brand)
                                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Unit Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <select class="form-control" name="unit_id" id="">
                                                    <option value="" disabled selected>---seleced Unit -----</option>
                                                  @foreach ($units as $unit)
                                                <option value="{{$unit->id}}">{{$unit->name}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Product Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                
                                                <input type="text" class="form-control" name="name" id="exampleInputuname3" placeholder="product  Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Product Code <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                
                                                <input type="text" class="form-control" name="code" id="exampleInputuname3" placeholder="product code">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Product Model <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                
                                                <input type="text" class="form-control" name="model" id="exampleInputuname3" placeholder="product code">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Product Stock Amount <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                
                                                <input type="text" class="form-control" name="stock_amount" id="exampleInputuname3" placeholder="product code">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Regular price <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                
                                                <input type="number" class="form-control" name="regular_price" id="exampleInputuname3" placeholder="product code">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Selling price <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                
                                                <input type="number" class="form-control" name="selling_price" id="exampleInputuname3" placeholder="product code">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="exampleInputEmail3" class="col-sm-3 control-label">Short Description  <span class="text-danger">*</span> </label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                              
                                                <textarea  class="form-control" name="short_description" id="exampleInputEmail3" placeholder="product short Description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputEmail34" class="col-sm-3 control-label">Long Description  <span class="text-danger">*</span> </label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                              
                                                <textarea  class="form-control summernote" name="long_description" id="exampleInputEmail34" placeholder="Long  Description"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="form-label col-sm-3 control-label" for="web">Product Img</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="image" id="input-file-now" class="dropify" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="form-label col-sm-3 control-label" for="web">Other Img</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="other_image[]" multiple id="input-file-now" class="dropify" accept="image/*" />
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
                                            <button type="submit" class="btn btn-success waves-effect waves-light text-white">Add a New Product</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
    
                    </div>

    </div>

@endsection