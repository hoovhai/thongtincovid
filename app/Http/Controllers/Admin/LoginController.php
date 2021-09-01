<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required',
        ]);
        

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $request->input('remember') )) {
            return redirect('/admin/home');
        }


        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }
}
