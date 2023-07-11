<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminLoginController extends Controller
{
    public function login() {
        return view('admin.login');
    }
    public function loginSession(Request $request) {
        $validator = Validator::make($request->all(), [
            'login'=>['required'],
            'password'=>['required']
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error', "Missing required feilds");
        }
        // variables
        $login = $request->input('login');
        $passwd = $request->input('password');

        $checkAdmins = Admins::where('login', $login)->first();
        if ($checkAdmins && Hash::check($passwd, $checkAdmins->passwd)) {
            session()->put('remeberNfaToken', $checkAdmins->remember_token);
            // dd(session()->get('remeber-nfa-token'));
            return redirect('/admin/dashboard');
        } else {
            return redirect()->back()->with('error', "Login or password wrong!");
        }        
    }
}
