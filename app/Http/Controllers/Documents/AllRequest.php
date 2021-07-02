<?php

namespace App\Http\Controllers\Documents;

use App\Http\Controllers\Controller;
use App\IMS_09_F01;
use Illuminate\Http\Request;

class AllRequest extends Controller
{
    public function index()
    {
        return view('page.allRequest')->with(['data' => IMS_09_F01::where('next_position', session()->get('positions'))->get()]);
    }
}
