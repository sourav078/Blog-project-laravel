@extends('back.master')
@section('title')
    | Manage Category |
@endsection

@section('body')
    <section class="py-5 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card shadow">
                        <div class="card-header">
                            <h2 class="text-center">Manage Category</h2>
                            <div class="text-center">
                                <h4 class="text-success text-center">{{Session::get('success') ? Session::get('success') : '' }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$category->category_name}}</td>
                                        <td>
                                            <a href="{{route('category.edit', $category->id)}}">edit</a>
                                            <a href="{{route('category.show', $category->id)}}">show</a>
                                            <form action="{{route('category.destroy', $category->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button href="" class="btn btn-danger">delete</button>
                                            </form>
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
