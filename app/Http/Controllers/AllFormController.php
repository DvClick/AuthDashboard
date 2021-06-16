<?php

namespace App\Http\Controllers;

use App\AllForm;
use Illuminate\Http\Request;

class AllFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.all.index')->with(['data' => AllForm::all()]);
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
     * @param  \App\AllForm  $allForm
     * @return \Illuminate\Http\Response
     */
    public function show(AllForm $allForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AllForm  $allForm
     * @return \Illuminate\Http\Response
     */
    public function edit(AllForm $allForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AllForm  $allForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AllForm $allForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AllForm  $allForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(AllForm $allForm)
    {
        //
    }
}
