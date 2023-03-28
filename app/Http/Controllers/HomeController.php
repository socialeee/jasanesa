<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\hari;
=======
use App\Models\Hari;
use App\Models\Schedule;
>>>>>>> 91185071c88f120769572c582e770f38ce3b2397

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
        $haris = Hari::all();
        // $schedules=schedules::all();
        return view('home', ['haris' => $haris]);
    }
}
