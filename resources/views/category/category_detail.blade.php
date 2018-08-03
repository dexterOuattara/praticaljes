@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Category <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                </ul>
            </nav>

            <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">

                <h1>Category : {{ $category->name }}</h1>
                <h2>Slug : {{ $category->slug }}</h2>
                <div class="col-sm-8 blog-main">
                    <a href="{{ route('category.edit', ['id' => $category->id]) }}">
                        <button type="button" class="btn btn-primary btn-sm">Edit Category</button>
                    </a>
                    <a href="{{ route('category.delete', ['id' => $category->id]) }}">
                        <button type="button" class="btn btn-danger btn-sm">Delete Category</button>
                    </a>

                </div>


            </main>
        </div>
    </div>
@endsection