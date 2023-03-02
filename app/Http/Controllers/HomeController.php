<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hari;
use App\Models\schedule;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');

        // dd('$haris'); 
        $haris=Hari::all();
        // $schedules=schedules::all();
        return view('home', ['haris'=> $haris]);
    }

}
