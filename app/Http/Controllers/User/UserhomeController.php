<?php

namespace App\Http\Controllers\User;

use App\Models\Bidang;
use App\Models\Consultant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Diklat;

class UserhomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Consultant $pakar)
    {
        //     public function listpakar()
        // {
        $bidangs = Bidang::orderBy('id')->get();
        $pakar = Consultant::orderBy('bidang_id');
        return view('pages.user.service.pakar_partial.kategori_fakultas', compact('bidangs'));
        // }
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // punya consultant
    public function cv($id)
    {
        $consultant = Consultant::where('id', '=', $id)->get();
        return view('pages.user.service.pakar_partial.hukum.cv', compact('consultant'));
    }
    // end consultant
    // punya diklat
    public function diklat()
    {
        $diklat = Diklat::orderBy('id', 'desc')->paginate(6);
        return view('pages.user.service.diklat.diklattest', compact('diklat'));
    }
    public function blog($id)
    {
        $diklat = Diklat::where('id', '=', $id)->get();
        return view('pages.user.service.diklat.blog', compact('diklat'));
    }
}
