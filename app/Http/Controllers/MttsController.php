<?php

namespace App\Http\Controllers;

use App\Models\Execom;
use Illuminate\Http\Request;

class MttsController extends Controller
{
    public function index(){
        $datas = Execom::all();
        return view('mtts.index',compact("datas"));
}
}
