<?php

namespace App\Http\Controllers\Documents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IMS_01_F02 extends Controller
{
    public function index()
    {
        return view('documents.IMS_01_F02')->with([
            'code' => 'IMS-01-F02',
            'name' => ' ',
        ]);
    }
    public function store(Request $request)
    {
        dd($request->input());
    }
}
