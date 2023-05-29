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
                                                <th>Unit Name</th>
                                                <th>Unit code</th>
                                                <th>Unit Description</th>
                                                <th>Publication Status</th>
                                                <th>Action</th>
                                                
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($units as $unit)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$unit->name}}</td>
                                                <td>{{$unit->code}}</td>
                                                <td>{{$unit->description}}</td>
                                    
                                                <td>{{$category->status==1?'published':'unpublished'}}</td>
                                                <td>
                                                    <a href="{{route('unit.edit',['id'=>$unit->id])}}" class="btn btn-success btn-sm">
                                                        <i class="ti-reddit"></i>
                                                    </a>
                                                    <a href="{{route('unit.delete',['id'=>$unit->id])}}"  onclick="return confirm('Are you sure to delete');" class="btn btn-success btn-sm">
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