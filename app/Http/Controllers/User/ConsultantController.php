<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Consultant;
use Illuminate\Http\Request;

class ConsultantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pakars = Consultant::orderBy('id','asc')->paginate(10);
        return view('pages.admin.pakar.index',compact('pakars'));
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
     * @param  \App\Models\Consultant  $consultant
     * @return \Illuminate\Http\Response
     */
    public function show(Consultant $consultant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consultant  $consultant
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultant $consultant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consultant  $consultant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultant $consultant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consultant  $consultant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultant $consultant)
    {
        //
    }
}
