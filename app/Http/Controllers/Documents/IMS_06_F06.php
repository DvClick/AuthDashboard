<?php

namespace App\Http\Controllers\Documents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IMS_06_F06 extends Controller
{
    public function index()
    {
        return view('documents.IMS_06_F06')->with([
            'code' => 'IMS-06-F06',
            'name' => ' ',
        ]);
    }
    public function store(Request $request)
    {
        dd($request->input());

    }
}
