<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnJSController extends Controller
{
    public function js(){
        return view('learnJs');
    }
    public function invoice(){
        return view('invoice');
    }
}
