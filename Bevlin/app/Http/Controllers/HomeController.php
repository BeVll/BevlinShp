<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    public function start(){
        $categories = DB::table('categories')->get();
        return view('layouts.main', compact('categories'));
    }
}
