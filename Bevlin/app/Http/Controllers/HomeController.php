<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
class HomeController extends Controller
{
    public function start(){
//        $data = array('name'=>"Virat Gandhi");
//        Mail::send(['html'=>'layouts.mail'], $data, function($message) {
//            $message->to('vladixerplay@gmail.com', 'Tutorials Point')->subject
//            ('Laravel Basic Testing Mail');
//            $message->from('bevlinsh@gmail.com','Virat Gandhi');
//        });
        $categories = DB::table('categories')->get();
        return view('layouts.main', compact('categories'));
    }
}
