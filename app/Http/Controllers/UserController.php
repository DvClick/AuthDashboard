<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.admin')->with(['data' => Admin::with(['position'])->get(), 'positions' => Position::all()]);
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
        $request->validate([
            'username' => 'required|max:255|min:4|unique:admins,username',
            'password' => 'required|max:255',
            'position' => 'required|exists:positions,id',
        ]);
        $insert = new Admin;
        $insert->username =  $request->username;
        $insert->p_id =  $request->position;
        $insert->password = Hash::make($request->password);
        $insert->save();

        return redirect()->back()->withSuccess('Added Admin Successfully !');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($id != session()->get('id')) {
            Admin::findOrFail($id)->delete();
            return redirect()->back()->withSuccess('Remove Admin Successfully !');
        }
        return redirect()->back()->withError('Please be carefule !');
    }
}
