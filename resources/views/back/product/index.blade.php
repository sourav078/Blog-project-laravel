@extends('back.master')
@section('title')
    | Manage Product |
@endsection

@section('body')
    <section class="py-5 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card shadow">
                        <div class="card-header">
                            <h2 class="text-center">Manage Product</h2>
                            <div class="text-center">
                                <h4 class="text-success text-center">{{Session::get('success') ? Session::get('success') : '' }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Category Name</th>
                                    <th>Brand Name</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td>{{$product->category_name}}</td>
                                        <td>{{$product->brand_name}}</td>
                                        <td>
                                            <img src="{{asset($product->image)}}" alt="" style="height: 80px"/>
                                        </td>
                                        <td>{{$product->description}}</td>
                                        <td>{{$product->status==1 ? 'published':'unpublished'}}</td>
                                        <td>
                                            <a href="{{route('product.edit',['id'=>$product->id])}}" class="btn btn-primary btn-sm" >Edit</a>
                                            <a href="{{route('product.delete',['id'=>$product->id])}}" class="btn btn-danger btn-sm"onclick="return confirm('Are you sure to delete this')" >Delete</a>
                                        </td>


                                    </tr>
                                @endforeach

                                </tbody>



                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
