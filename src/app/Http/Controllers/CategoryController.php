<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function category(){
        $categorys = Category::all();
        return view('item', compact('categorys'));
    }
}
