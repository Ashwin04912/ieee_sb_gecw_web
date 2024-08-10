<?php

namespace App\Http\Controllers;

use Cloudinary\Api\Search\SearchApi;
use Illuminate\Http\Request;

class ExecomController extends Controller
{
    function index()
    {
       
        return view('execom.index');
    }
}
