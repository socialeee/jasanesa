<?php

namespace App\Http\Controllers;

use App\Models\bidang;
use App\Models\Consultant;
use Illuminate\Http\Request;

class UserhomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view();
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

    public function listpakar(Consultant $pakar)
    {
        $bidangs = bidang::orderBy('id')->get();
        $pakar = Consultant::orderBy('bidang_id');
        return view('pages.user.service.pakar_partial.kategori_fakultas', compact('bidangs'));
    }

    // public function header(Consultant $pakar)
    // {
    //     $bidangs = bidang::orderBy('id');
    //     $pakar = Consultant::orderBy('bidang_id');
    //     return view('pages.user.layout.partial_homepage.header', compact('header'));
    // }
}
