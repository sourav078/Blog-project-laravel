<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;

    public function index(){
        return view('back.product.index',[
            'categories' => Category::all(),
            'products' => Product::all(),
        ]);

    }
    public function create(){
        return view('back.product.create',[
            'categories' => Category::all(),
        ]);
    }

    public function store(Request $request){
        Product::createProduct($request);
        return back()->with('success','Product Created Successfully');
    }

    public function edit($id){
        return view('back.product.edit',[
            'categories' => Category::all(),
            'product' => Product::find($id)
        ]);
    }

    public function update(Request $request, $id){
        Product::updateProduct($request, $id);
        return redirect('/manage-product')->with('success','Product Updated Successfully');
    }

    public function destroy($id){
        $this->product = Product::find($id);
        if (file_exists($this->product->image))
        {
            unlink($this->product->image);
        }
        $this->product->delete();
        return back()->with('success','Product Deleted Successfully');
    }
}
