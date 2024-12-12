<?php

namespace App\Http\Controllers;

use App\Models\Execom;
use Illuminate\Http\Request;

class WieController extends Controller
{
    public function index(){
        $datas = Execom::all();
        return view('wie_society.index',compact("datas"));
}
}
