<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AchieveController extends Controller
{
    public function index(){
        return view('achievements.index');
    }
}
