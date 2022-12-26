<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CategoriesController extends Controller
{
    public static function getCategories(){
        $categories = DB::table('categories')->get();
        return $categories;
    }
}
