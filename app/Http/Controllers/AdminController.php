<?php

namespace App\Http\Controllers;

use App\Models\MainPageNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.index');
    }
    public function firstPageNews(Request $req) {
        $validator = Validator::make($req->all(), [
            'title'=>['required'],
            'file'=>['required', 'file']
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error', 'Missing required felid');
        }
        $req->file('file')->store('public/images');

        MainPageNews::create([
            'title'=>$req->input('title'),
            'file'=>$req->file('file')->hashName()
        ]);
        return redirect()->back()->with('success', 'Yangilik qo\'shildi ');
    }
}
