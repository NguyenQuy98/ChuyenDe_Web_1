<?php

namespace App\Http\Controllers;

use App\Airline;
use App\Nation;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $database = new Nation();
        $Nation = $database->getNationHasAriline();

        // dd($Nation);
        return view('airlinelist',compact('Nation'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Airline  $Airline
     * @return \Illuminate\Http\Response
     */
    public function show(Airline $Airline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Airline  $Airline
     * @return \Illuminate\Http\Response
     */
    public function edit(Airline $Airline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Airline  $Airline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Airline $Airline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Airline  $Airline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Airline $Airline)
    {
        //
    }
}
