<?php

namespace App\Http\Controllers;

use App\Models\Execom;
use Illuminate\Http\Request;

class SightController extends Controller
{
    public function index(){
        $datas = Execom::all();
        return view('sight.index',compact("datas"));
}
}
