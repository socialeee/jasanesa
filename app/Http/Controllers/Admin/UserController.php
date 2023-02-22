<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id','desc')->paginate(10);
        return view('pages.admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.user.create');
        // return User::create([
        //     'name' => $user['name'],
        //     'email' => $user['email'],
        //     'password' => Hash::make($user['password']),
        //     'password_confirmation' => ($user['password_confirmation']),
        //     'nohp' => ($user['nohp'])
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required|max:255|string',
            'username'     => 'unique|required|string|max:50',
            'email'     => 'required|email|unique',
            'password'     => 'required',
            'password_confirmation'   => 'required',
            'nohp'  => 'required'
        ]);

        if($request->password != $request->password_confirmation){
            return redirect()->route('user')->with(['error' => 'Password dan Password Confirmation harus sama!']);
        }
        $user = User::create([
            'name'      => $request->name,
            'username'  => $request->username,
            'email'     => $request->email,
            'password'  => $request->password,
            'nohp'      => $request->nohp
        ]);

        if($user){
            //redirect dengan pesan sukses
            return redirect()->route('user')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('user')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        return view('pages.admin.user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        return view('pages.admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        $this->validate($request, [
            'name'     => 'max:255|string',
            'username'     => 'string|max:50',
            'email'     => 'email',
            'address'     => 'max:255',
        ]);
        $user->update($request->all());
        return redirect()->route('user.index')->with('success','Data Has Been Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        // $user->delete();
        // if ($user) {
        //     return redirect()
        //         ->route('user.index')
        //         ->with([
        //             'success' => 'Post has been deleted successfully'
        //         ]);
        // } else {
        //     return redirect()
        //         ->route('user.index')
        //         ->with([
        //             'error' => 'Some problem has occurred, please try again'
        //         ]);
        // }
        dd($user);
    }
}
