<?php

namespace App\Http\Controllers;

use App\Models\Execom;
use Illuminate\Http\Request;

class ApsController extends Controller
{
    public function index(){
        $datas = Execom::all();
        return view('aps.index',compact("datas"));
}
}
