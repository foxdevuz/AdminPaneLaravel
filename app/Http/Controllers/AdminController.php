<?php

namespace App\Http\Controllers;

use App\Models\MainPageNews;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    # admin panel direction btw ap = admin panel
    public function ap_showAll() {
        $get = MainPageNews::all();
        return view('admin.show', ['all'=>$get]);
    }

    public function mainpagenews_destroy(Request $req){
        $validation = Validator::make($req->all(), [
            'id'=>['required']
        ]);
        if($validation->fails()){
            return redirect('/admin/mainPageNew')->with('error', 'ID talab qilinadi');
        }
        $find = MainPageNews::find($req->input('id'));
        if(!$find){
            return redirect('/admin/mainPageNew')->with('error', 'Ushbu IDdagi ma\'lumot mavjud emas');
        }
        Storage::delete('public/images/'.$find->file);
        $find->delete();
        return redirect('/admin/mainPageNew')->with('success', 'Ma\'lumot o\'chirildi');
    }

    #add news
    public function addNews() {
        return view('admin.addNews');
    }
    public function addNewsBackend(Request $req) {
        $validation = Validator::make($req->all(), [
            'title'=>['required'],
            'text'=>['required'],
            'file'=>['required', 'file'],
        ]);

        if($validation->fails()){
            return redirect('/admin/mainPageNew')->with('error', 'Missing required field(s)');
        }
        #save image
        $req->file('file')->store('public/images');
        News::create([
            'name'=>$req->input('title'),
            'desc'=>$req->input('text'),
            'file'=>$req->file('file')->hashName()
        ]);
        return redirect()->back()->with('success', 'Yangilik muvoffaqiyatli qo\'shildi');
    }
    public function showNews() {
        $get = News::all();
        return view('admin.showNews', ['all'=>$get]);
    }

    public function destroyNews(Request $req) {
        $validation = Validator::make($req->all(), [
            'id'=>['required']
        ]);
        if($validation->fails()){
            return redirect()->back()->with('error', 'ID talab qilinadi');
        }
        $find = News::find($req->input('id'));
        if(!$find){
            return redirect()->back()->with('error', 'Ushbu IDdagi ma\'lumot mavjud emas');
        }
        Storage::delete('public/images/'.$find->file);
        $find->delete();
        return redirect()->back()->with('success', 'Ma\'lumot o\'chirildi');
    }
}
