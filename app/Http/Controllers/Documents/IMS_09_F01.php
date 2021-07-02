<?php

namespace App\Http\Controllers\Documents;

use App\City;
use App\Department;
use App\Http\Controllers\Controller;
use App\IMS_09_F01 as IMS_09_F01Model;
use Illuminate\Http\Request;

class IMS_09_F01 extends Controller
{
    public function index()
    {
        return view('documents.IMS_09_F01')->with([
            'code' => 'IMS-09-F01',
            'name' => ' ',
            'city' => City::all(),
            'department' => Department::all(),
        ]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'city' => 'required|max:255',
            'date' => 'required|max:255',
            'location' => 'required|max:255',
            'department' => 'required|max:255',
            'amountmain' => 'required|max:255',
        ]);
        $data = [];
        for ($i = 0; $i < count($request->service); $i++) {
            array_push($data,  [
                'service' => $request->service[$i],
                'detail' => $request->detail[$i],
                'amount' => $request->amount[$i],
                'amountstr' => $request->amountstr[$i],
            ]);
        }
        $insert = new IMS_09_F01Model;
        $insert->city = $request->city;
        $insert->date = $request->date;
        $insert->location = $request->amountmain;
        $insert->department = $request->department;
        $insert->amountmain = $request->amountmain;
        $insert->table = json_encode($data);
        $insert->approval = json_encode([]);
        $insert->sent_from = session()->get('id');
        $insert->next_position = 1;
        $insert->save();
        return redirect()->back()->withSuccess('Sent form successfully !');
    }
    public function show($id)
    {
        return view('docs.IMS_09_F01')->with([
            'data' => IMS_09_F01Model::with('admin')->findOrFail($id),
            'code' => 'IMS-09-F01',
            'name' => ' ',
        ]);
    }
    public function check(Request $request, $id)
    {

        $data =  IMS_09_F01Model::findOrfail($id);

        $data->approval = json_encode([
            'admin' => session()->get('id'),
            'position' => session()->get('positions'),
            'state' => $request->type,
        ]);

        $data->next_position = $request->type == '1' ? 2 : 1;
        $data->save();
        return redirect()->back()->withSuccess('Update form successfully !');
    }
}
