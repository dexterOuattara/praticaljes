@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Post <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nav item again</a>
                    </li>
                </ul>
            </nav>

            <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                <h1>Edit Post</h1>
                <div class="col-md-6">
                    <form method="post" action="">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="id_title" name="name"
                                   aria-describedby="title" value="{{ $category->name }}">
                        </div>
                        <div class="form-group">
                            <label for="name">Slug</label>
                            <input type="text" class="form-control" id="id_title" name="slug"
                                   aria-describedby="imagePost" value="{{ $category->slug }}">
                        </div>

                        <button type="submit" class="btn btn-primary">update Category</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection