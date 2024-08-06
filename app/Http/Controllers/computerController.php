<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class computerController extends Controller
{
    public function index(){
        return view('computerSociety.index');
}
}