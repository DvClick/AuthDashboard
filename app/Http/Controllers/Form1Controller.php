<?php

namespace App\Http\Controllers;

use App\form1;
use Illuminate\Http\Request;

class Form1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('page.form1.index')->with(['data' => form1::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.form1.insert');
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
     * @param  \App\form1  $form1
     * @return \Illuminate\Http\Response
     */
    public function show(form1 $form1)
    {
        return view('page.form1.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\form1  $form1
     * @return \Illuminate\Http\Response
     */
    public function edit(form1 $form1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\form1  $form1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, form1 $form1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\form1  $form1
     * @return \Illuminate\Http\Response
     */
    public function destroy(form1 $form1)
    {
        //
    }
}
