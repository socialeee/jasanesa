<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
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
        $faculties = Faculty::orderBy('id','desc')->paginate(10);
        return view('pages.admin.faculty.index',compact('faculties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.faculty.create');
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
        ]);

        
        $faculties = Faculty::create([
            'name'     => $request->name,
        ]);

        if($faculties){
            //redirect dengan pesan sukses
            return redirect()->route('faculty')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('faculty')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faculty  $faculties
     * @return \Illuminate\Http\Response
     */
    public function show(Faculty $faculties)
    {
        return view('pages.admin.faculty.show',compact('faculties'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faculty  $faculties
     * @return \Illuminate\Http\Response
     */
    public function edit(Faculty $faculties)
    {
        return view('pages.admin.faculty.edit', compact('faculties'));
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
            'name'     => 'max:255|string'
        ]);
        $faculties->update($request->all());
        return redirect()->route('faculty.index')->with('success','Data Has Been Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculty $faculties)
    {
        $faculties->delete();
        if ($faculties) {
            return redirect()
                ->route('faculty.index')
                ->with([
                    'success' => 'Post has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('faculty.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
