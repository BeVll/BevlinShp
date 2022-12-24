<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class LocalController extends Controller
{
    function changeLang($langcode){

        App::setLocale($langcode);
        session()->put("lang_code",$langcode);
        return redirect()->back();
    }
}
