<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectionController extends Controller
{
    public function breakingNews() {
        return view('extra.breakingNews');
    }
    public function footballNews() {
        return view('extra.footballNews');
    }
    public function clubNews() {
        return view('extra.clubNews');
    }
    public function u11(Request $request) {
        return view('club.u-club');
    }
    public function clubHistory() {
        return view('club.history');
    }
    public function contact() {
        return view('extra.contact');
    }
    public function lider() {
        return view('extra.liders');
    }
    public function doctors() {
        return view('extra.doctors');
    }
    public function coach(){
        return view('extra.coach');
    }

}
