<?php

namespace App\Http\Controllers;

use App\Models\regestration;
use App\Http\Requests\StoreregestrationRequest;
use App\Http\Requests\UpdateregestrationRequest;

class RegestrationController extends Controller
{
    public function getall(){

        $data = Regestration::all();
        return view('getdata' , compact('data'));
    }

    public function getid()
    {
        $id = request('id');
        $data = Regestration::where('id', $id)->first();
        return view('getid', compact('data'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreregestrationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreregestrationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\regestration  $regestration
     * @return \Illuminate\Http\Response
     */
    public function show(regestration $regestration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\regestration  $regestration
     * @return \Illuminate\Http\Response
     */
    public function edit(regestration $regestration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateregestrationRequest  $request
     * @param  \App\Models\regestration  $regestration
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateregestrationRequest $request, regestration $regestration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\regestration  $regestration
     * @return \Illuminate\Http\Response
     */
    public function destroy(regestration $regestration)
    {
        //
    }
}
