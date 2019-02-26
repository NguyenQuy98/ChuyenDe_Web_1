<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function main()
    {
        return view('home');
    }
    public function list()
    {
        return view('flight-list');
    }
    public function book()
    {
        return view('flight-book');
    }
    public function detail()
    {
        return view('flight-detail');
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
}
