@extends('backend.layout.master')
@section('content')
<div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Blank Page</h1>
          <p>Start a beautiful journey here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
         <a href="{{route('tech.create')}}" class="btn btn-primary">Add</a>
        </ul>
      </div>
 <div class="row">
   <div class="col-md-12">
            @include('backend.layout.notification')
         </div>
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Title Slug</th>
                      <th>description</th>
                      <th>Action</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $brand)
                    <tr>
                      <td>{{$brand->title}}</td>
                      <td>{{$brand->slug}}</td>
                      <td>{{$brand->description}}</td>
                      <td>
                       <form action="{{route('tech.destroy',$brand->id)}}" method="post">
                         @csrf
                         @method('DELETE')
                        <a href="{{route('tech.edit',$brand->id)}}" class="btn btn-primary">Edit</a> 
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are You sure you want to delete it')">Delete</button> 
                       </form>
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
  

