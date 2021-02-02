@extends('movies.layout')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-4">
    
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="#">
            <img src="{{asset('uploads/'.$movie->poster)}}" alt="{{$movie->title}}" style="width:100%">
            <div class="caption">
              <p>{{ $movie->title}}</p>
              <p>{{ $movie->genre}} | {{ $movie->release_year}}</p>
            </div>
          </a>
        </div>
      </div>   
    </div>
</div>
@endsection