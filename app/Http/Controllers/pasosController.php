<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pasosController extends Controller
{
    //
    public function step1()
    {
        return view('step1');
    }
    public function step2()
    {
        return view('step2');
    }
}
