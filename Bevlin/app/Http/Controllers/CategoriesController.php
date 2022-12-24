<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CategoriesController extends Controller
{
    public function getCategories(){
        return DB::table('categories')->get();;
    }
}
