<?php

namespace App\Http\Controllers;

use App\MyData;
use Illuminate\Http\Request;

class MyDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data=MyData::get();
      return view('tech.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tech.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MyData  $myData
     * @return \Illuminate\Http\Response
     */
    public function show(MyData $myData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MyData  $myData
     * @return \Illuminate\Http\Response
     */
    public function edit(MyData $myData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MyData  $myData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyData $myData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MyData  $myData
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyData $myData)
    {
        //
    }
}
