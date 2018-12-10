<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function speaking()
    {
        return view('speaking.index');
    }

    public function writing()
    {
        return view('writing.index');
    }

    public function reading()
    {
        return view('reading.index');
    }

    public function listening()
    {
        return view('listening.index');
    }
}
