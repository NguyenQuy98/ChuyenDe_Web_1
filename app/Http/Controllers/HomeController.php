<?php

namespace App\Http\Controllers;

use App\Http\Models\Flightbooking;
use Illuminate\Http\Request;
use App\City;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }
    public function index()
    {
        $cities = City::all();
        return view('index',[
            'cities' => $cities,
        ]);
    }
}
