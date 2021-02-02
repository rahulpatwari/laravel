<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Movie::latest()->paginate(2);
        return view('movies.index',compact('data'));
        // for random order use inRandomOrder and anther way to return data is using with method
        //like this return view('movies.index')->with('datas',$data);
        // $data=Movie::orderBy('id','DESC')->paginate(2);
        // return view('movies.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genre = ['Action','Comedy','Horror','Toon'];
        return view('movies.add',compact('genre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['title'=>'required',
        'genre'=>'required',
        'poster'=>'required|image|mimes:jpeg,png,jpg,gif',
        ]);
        $imageName='';

        if($request->poster)
        {
            $imageName=uniqid().'.'.$request->poster->extension();
            $request->poster->move(public_path('uploads'),$imageName);
        
        }
        $data=new Movie;
        $data->title=$request->title;
        $data->genre=$request->genre;
        $data->release_year=$request->release_year;
        $data->poster=$imageName;
        if($data->save())
        {
          return redirect()->route('movies.index')->with('success','Data Added Succesfully');  
        }
        else{
            return redirect()->route('movies.index')->with('error','Data Not Added');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movies.show',compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        $genres = ['Action','Comedy','Horror','Toon'];
        return view('movies.edit',compact('movie','genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $movie=Movie::findOrFail($id);
      $movies=$movie->poster;
      if($movie->delete())
      {
         if(file_exists(public_path('uploads/'.$movies))){

      unlink(public_path('uploads/'.$movies));

    }else{

      dd('File does not exists.');

    }
            return redirect()->route('movies.index')->with('success','Data Delete Succesfully');  
         }
        else{
          return redirect()->route('movies.index')->with('error','Data Not Deleted');
      }
    }
}
