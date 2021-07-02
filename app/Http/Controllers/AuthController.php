<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function setting()
    {
        return view('page.auth');
    }
    public function check(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:255|exists:admins,username',
            'password' => 'required|string|max:255',
        ]);
        $data = Admin::where('username', $request->username)->first();
        if (Hash::check($request->password, $data->password)) {
            session()->put('id', $data->id);
            session()->put('positions', $data->p_id);
            session()->put('username', $data->username);
            session()->put('name', $data->name);
            return redirect()->route('index');
        } else {
            return redirect()->back()->withInput($request->input())->withErrors(['password' => 'Incorrect password']);
        }
    }
    function update(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|max:255|min:4',
            'password' => 'required|max:255',
        ]);
        $data = Admin::findOrFail(session()->get('id'));
        if (Hash::check($request->password, $data->password)) {
            $data->username = $request->username;
            $data->save();
            session()->put('id', $data->id);
            session()->put('positions', $data->p_id);
            session()->put('username', $data->username);
            session()->put('name', $data->name);
            return  back()->withSuccess('Username updated');
        } else {
            return redirect()->back()->withErrors('Incorrect password');
        }
    }
    function password(Request $request)
    {
        $validated = $request->validate([
            'password_old' => 'required|max:255|min:6',
            'password' => 'required|max:255|min:6|different:password_old|confirmed',
        ]);
        $data = Admin::findOrFail(session()->get('id'));
        if (isset($data)) {
            if (Hash::check($request->password_old, $data->password)) {
                $data->password = Hash::make($request->password);
                $data->save();
                session()->put('id', $data->id);
                session()->put('positions', $data->p_id);
                session()->put('username', $data->username);
                session()->put('name', $data->name);
                return  back()->withSuccess('Password updated');
            } else {
                return redirect()->back()->withErrors('Incorrect password');
            }
        }
    }
    function logout()
    {
        if (session()->exists('id')) {
            session()->forget('id');
            session()->save();
            return redirect()->route('login');
        }
    }
}
