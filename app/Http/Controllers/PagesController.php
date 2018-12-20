<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function section($section){
        $qType = $section;
        return view('quiz',['qType'=>$qType]);
    }

     public function update(Request $request)
    {
        $file=$request->file('avatar')->store('public/avatar');
        return $file;
    }
}
