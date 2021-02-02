@extends('backend.layout.master')
@section('content')
     <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Blank Page</h1>
          <p>Start a beautiful journey here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row">
                
                <div class="col-md-12">
                  <div class="tile">
            <h3 class="tile-title">Add Category</h3>
            <div class="tile-body">
              <form method="post" action="{{route('category.store')}}" >
                {{csrf_field()}}
                <div class="form-group">
                  <label class="control-label">Category Name</label>
                  <input class="form-control" type="text" placeholder="Enter Product Name" name="title">
                </div>
                      
                  <div class="form-group">
                    <label class="control-label">Product Image</label>
                    <input class="form-control" type="file" name="photo">
                  </div>
                  <div class="form-group">
                <label for="is_parent">Is Parent</label><br>
                <input type="checkbox" name='is_parent' id='is_parent'> Yes                        
              </div>

              <div class="form-group d-none" id='parent_cat_div'>
                <label for="parent_id">Parent Category</label>
                <select name="parent_id" class="form-control">
                    <option value="">--Select any category--</option>
                    @foreach($all_cat as $cat) 
                    <option value="{{$cat->id}}">{{$cat->title}}</option>
                    @endforeach
                    
                </select>
              </div>
                 <div class="form-group">
                      <label class="control-label">Status</label>   
                      <select class="form-control" id="exampleSelect1" name="status">
                         <option value="active">Active</option>
                         <option value="inactive">Inactive</option>
                      </select>
                 </div>
             
        
            <div class="tile-footer">
              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-plus-circle"></i>Add Category</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="{{route('category.index')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i></i>Cancel</a>
            </div>
         </form>
             </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   @endsection
