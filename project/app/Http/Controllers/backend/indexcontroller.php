<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class indexcontroller extends Controller
{
    public function index(){

        return view('backend.index');
    }

    public function table(){
        return view('backend.tables-data');
    }

    
    public function error(){
        return view('backend.pages-error-404');
    }

}

