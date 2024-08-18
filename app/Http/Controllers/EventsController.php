<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index(){
        return view('events.index');
     }


     public function create() {
        return view('events.create');
     }

     public function store(Request $request){
      $request->validate([
         'image1'=>'required|mimes:png,jpg',
         'image2'=>'required|mimes:png,jpg',
         'image3'=>'required|mimes:png,jpg',
         'title'=>'required',
         'description'=>'required',
      ]
      );
     }
}

