@extends('movies.layout')
@section('content')
    <div class="container my">
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
                <h3>Edit Movies</h3>
                <form action="{{ route('movies.update',$movie->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                    <div class="form-group">
                        <label class="col-form-label" for="title">Title</label> 
                    <input type="text" class="form-control" placeholder="Enter Title" id="title"  name="title" value="{{$movie->title}}">
                    </div>
                    <div class="form-group">
                        <label for="sel1">Select Genre:</label>
                        <select class="form-control" id="sel1" name="genre">
                        <option>Select Genre</option>
                    @if ($genres)
                      @foreach ($genres as $item)
                      @if ($item==$movie->genre)
                        <option value="{{$item}}" selected>{{$item}}</option>
                      @else
                      <option value="{{$item}}">{{$item}}</option>
                      @endif
                      @endforeach  
                    @endif
                </select>
            </div>
                   
                    <div class="form-group">
                        <label class="col-form-label" for="year">Release Year</label>
                    <input type="text" class="form-control" placeholder="Enter Year" id="year"  name="release_year" value="{{$movie->release_year}}">
                    </div>
                
                    <div class="form-group">
                        <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile02" name="poster" accept="image/*">
                            <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                        </div>
                       
                        </div>
                    </div>
                  <input type="submit" value="Submit" class="btn btn-success">
                </form>    
                
            </div>
        </div>
         
    </div>
@endsection