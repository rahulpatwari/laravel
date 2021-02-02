@extends('backend.layout.master')
@section('content')
<div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Blank Page</h1>
          <p>Start a beautiful journey here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <a href="{{route('category.create')}}" class="btn btn-primary">Add Category</a>
          <!-- <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Blank Page</a></li> -->
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
                      <th>Category Name</th>
                      <th>Category Slug</th>
                      <th>Category Image</th>
                      <th>Parent Category</th>
                      <th>Category id</th>
                      <th>Status</th>
                      <th>Action</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($categories as $category)
                    <tr>
                      <td>{{$category->title}}</td>
                      <td>{{$category->slug}}</td>
                      <td><img src="{{asset('upload/$category->photo')}}" width="50" height="50"></td>
                      <td>{{$category->is_parent}}</td>
                      <td>{{$category->parent_id}}</td>
                      <td>{{$category->status}}</td>
                      <td>
                       <form action="{{route('category.destroy',$category->id)}}" method="post">
                         @csrf
                         @method('DELETE')
                        <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary">Edit</a> 
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
  

