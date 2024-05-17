<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index(){
        $category = Product::find(1);
        return view("category",compact("category"));

    }
}
