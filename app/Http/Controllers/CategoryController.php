<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('back.category.index',[
            'categories' => Category::all()
        ]);

    }
    public function create(){
        return view('back.category.create');
    }

    public function store(Request $request){
        Category::createCategory($request);
        return back()->with('success','Category Created Successfully');
    }

    public function edit($id){
        return view('back.category.edit',[
            'category' => Category::find($id)
        ]);
    }
    public function show($id){
        return view('back.category.detail',[
            'category' => Category::find($id)
        ]);
    }

    public function update(Request $request, $id){
        Category::updateCategory($request, $id);
        return redirect('/category')->with('success','Category Updated Successfully');
    }

    public function destroy($id){
        Category::deleteCategory($id);
        return back()->with('success','Category Deleted Successfully');
    }
}
