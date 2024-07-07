<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('front.home.home',
            [
                'categories' => Category::all(),
                'products'=>Product::where('status',1)->get()
            ]);
    }
    public function categoryProducts(){
        return view('front.category.category-products',[
            'categories' => Category::all(),
        ]);
    }
    public function productsDetails($id){
        return view('front.product.details',[
            'product' => Product::find($id)
        ]);
    }
}
