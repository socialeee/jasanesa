<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // dd($data);
        $validator = Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'string', 'min:8'],
            'nohp' => ['required', 'string', 'min:9'],
        ]);
        // dd($validator);
        return $validator;

        // $postData = User::create([
        //     'name' => $data['name'],
        //     'username' => $data['username'],
        //     'email' => $data['email'],
        //     'role_id' => 2,
        //     'password' => Hash::make($data['password']),
        //     'password_confirmation' => ($data['password_confirmation']),
        //     'nohp' => ($data['nohp'])
        // ]);
        // return $validate;
        // return redirect()->back()
    }

    // protected function validator(Request $request)
    // {
    //     // $requestData = new Request($request->all());
    //     $validator = $this->validator($request->all());
    //     // $validator = $this->validator($request->all());
    //     if ($validator->fails()) {
    //         $this->throwValidationException(
    //             $request,
    //             $validator
    //         );
    //     }
    //     $this->create($request->all());

    //     return redirect($this->redirectPath());
    // }

    //     $user = User::create([
    //         'name' => $request->input('name'),
    //         'username' => $request->input('username'),
    //         'email' => $request->input('email'),
    //         'password' => bcrypt($request->input('password')),
    //         'nohp' => $request->input('nohp'),
    //         'role_id' => 2
    //     ]);

    // return redirect()->route('/');


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // dd($data);
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'role_id' => 2,
            'password' => Hash::make($data['password']),
            'password_confirmation' => ($data['password_confirmation']),
            'nohp' => ($data['nohp'])
        ]);
        // return $user;
    }
    public function register(Request $request)
    {

        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            dd($validator->errors()->first());
        }
        // event(new Registered($user = $this->create($request->all())));
        $user = $this->create($request->all());
        // dd($user);
        Auth::login($user);

        return redirect()->route('/payment');
    }
}
