@extends('movies.layout')
@section('content')
    

<div class="container">
    
    @if ($message=Session::get('success'))
    <div class="alert alert-success">
        <strong>Success!</strong> {{$message}}.
      </div>
    @endif

    
          
    <table class="table table-bordered table-responsive">
      <thead>
        <tr>
          <th>Poster</th>
          <th>Title</th>
          <th>Release Date</th>
          <th>Genre</th>
          <th>time</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
          @if ($data)
           @foreach ($data as $movie)
           
           <tr>
            <td><img src="{{asset('uploads/'.$movie->poster )}}" alt="" height="50" width="50"></td>
            <td>{{$movie->title}}</td>
            <td>{{$movie->release_year}}</td>
            <td>{{$movie->genre}}</td>
            <td>{{$movie->created_at->diffForHumans()}}</td>
            <td>
                <form action="{{route('movies.destroy',$movie->id)}}" method="post">
                    @csrf
                    @method('DELETE')
            <a href="{{route('movies.edit',$movie->id)}}" class="btn btn-primary">Edit</a> 
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are You sure you want to delete it')">Delete</button> 
                <a href="{{route('movies.show',$movie->id)}}" class="btn btn-warning">show</a>
            </form>
            </td>
          </tr>  
           @endforeach
              
          @endif
      
     
      </tbody>
    </table>
    {{ $data->links() }}
  </div>
  @endsection  