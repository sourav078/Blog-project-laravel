@extends('back.master')
@section('title')
    | Edit Product |
@endsection

@section('body')
    <section class="py-5 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card shadow">
                        <div class="card-header">
                            <h2 class="text-center">EDIT Product</h2>
                            <div class="text-center">
                                <h4 class="text-success text-center">{{Session::get('success') ? Session::get('success') : '' }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('product.update', $product->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <label for="" class="col-md-4">Product Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="product_name" value="{{$product->product_name}}" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="category_name"value="{{$product->category_name}}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Brand Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="brand_name"value={{$product->brand_name}} class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Description</label>
                                    <div class="col-md-8">
                                        <textarea name="description" id="" cols="10" rows="5" class="form-control">{{$product->description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image"  class="form-control"/>
                                        <img src="{{asset($product->image)}}" alt="" style="height: 80px">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="name" class="col-md-4">Status</label>
                                    <div class="col-md-8">
                                        <label for="published"><input type="radio"  name="status" value="1" {{$product->status==1?'checked':''}}>Published</label>
                                        <label for="unpublished"><input type="radio" name="status" value="0"{{$product->status==0?'checked':''}}>Unpublished</label>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-dark" value="Update Product">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
