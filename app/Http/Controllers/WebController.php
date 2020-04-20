<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class WebController extends Controller
{
    public function index(){
        $categories = Category::all();

        return view("themes.website.home",['categories'=>$categories]);
    }
}
