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
                <h1>Edit Assessment</h1>
                <div class="col-md-6">
                    <form method="post" action="">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" class="form-control" id="type_assessment" name="type_assessment"
                                   aria-describedby="title" value="{{ $typeassess->type_assessment }}">
                        </div>

                        <button type="submit" class="btn btn-primary">update Type Assessment</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection