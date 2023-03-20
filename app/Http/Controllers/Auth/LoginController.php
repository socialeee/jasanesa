<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    // protected $redirectTo = '/home';
    protected function redirectTo()
    {
        // if (auth()->user()->role == '2') {
        //     // dd('user');
        //     return route('welcome');
        // }
        // dd('tes');
        // dd(auth()->user());
        if (auth()->user()->role_id == '1') {
            // dd('user');
            return route('home');
        }
        return route('welcome');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function logout(Request $request)
    // {
    //     logout();

    //     request()->session()->invalidate();

    //     request()->session()->regenerateToken();

    //     return redirect('/');
    // }
}
