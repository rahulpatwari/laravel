@extends('movies.layout')
@section('content')
    <div class="container my">
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
                <h3>Add Movies</h3>
                <form action="{{ route('movies.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                        <label class="col-form-label" for="title">Title</label>
                        <input type="text" class="form-control" placeholder="Enter Title" id="title"  name="title">
                    </div>
                    <div class="form-group">
                        <label for="sel1">Select Genre:</label>
                        <select class="form-control" id="sel1" name="genre">
                        <option>Select Genre</option>
                    @if ($genre)
                      @foreach ($genre as $item)
                        <option value="{{$item}}">{{$item}}</option>
                      @endforeach  
                    @endif
                </select>
            </div>
                   
                    <div class="form-group">
                        <label class="col-form-label" for="year">Release Year</label>
                        <input type="text" class="form-control" placeholder="Enter Year" id="year"  name="release_year">
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