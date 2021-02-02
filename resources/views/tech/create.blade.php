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
            <h3 class="tile-title">Add</h3>
            <div class="tile-body">
              <form method="post" action="{{route('tech.store')}}">
                @csrf
                <div class="form-group">
                  <label class="control-label">Title</label>
                  <input class="form-control" type="text" placeholder="Enter Title" name="title">
                </div>
               
                 <div class="form-group">
                      <label class="control-label">Description</label>   
                      <textarea class="form-control" name="description"></textarea>
                 </div>
                 <div class="tile-footer">
              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
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