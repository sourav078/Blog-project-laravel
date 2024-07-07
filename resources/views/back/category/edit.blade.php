@extends('back.master')
@section('title')
    | Edit Category |
@endsection

@section('body')
    <section class="py-5 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card shadow">
                        <div class="card-header">
                            <h2 class="text-center">EDIT Category</h2>
                            <div class="text-center">
                                <h4 class="text-success text-center">{{Session::get('success') ? Session::get('success') : '' }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('category.update', $category->id)}}" method="post" >
                                @csrf
                                @method('patch')

                                <div class="row">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="category_name" value="{{$category->category_name}}" class="form-control" />
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-dark" value="Update Category">
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
