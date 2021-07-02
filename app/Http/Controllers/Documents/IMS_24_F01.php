<?php

namespace App\Http\Controllers\Documents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IMS_24_F01 extends Controller
{
    public function index()
    {
        return view('documents.IMS_24_F01')->with([
            'code' => 'IMS-24-F01',
            'name' => ' ',
        ]);
    }
    public function store(Request $request)
    {
        dd($request->input());
    }
}
