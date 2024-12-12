<?php

namespace App\Http\Controllers;

use App\Models\Execom;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index(){
        $datas = Execom::all();
        return view('computerSociety.index',compact("datas"));
}
}