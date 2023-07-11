<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use Illuminate\Http\Request;
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
            return redirect()->back()->withErrors('error', "Missing required feilds");
        }
        // variables
        $login = $request->input('username');
        $passwd = $request->input('password');

        $checkAdmins = Admins::where('login', $login)->first();

        if ($checkAdmins && password_verify($passwd, $checkAdmins->passwd)) {
            session()->put('remeber-nfa-token', $checkAdmins->rememberToken);
            return redirect('/admin/dashboard');
        } else {
            return redirect()->back()->withErrors('error', "Login or password wrong!");
        }        
    }
}
