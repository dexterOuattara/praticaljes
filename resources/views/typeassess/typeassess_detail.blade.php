@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Type Assessment <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                </ul>
            </nav>

            <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">

                <h1>{{ $typeassess->id }}</h1>
                <h1>Category Assessment :{{ $typeassess->name }}</h1>

                <div class="col-sm-8 blog-main">
                    <a href="{{ route('typeassess.edit', ['id' => $typeassess->id]) }}">
                        <button type="button" class="btn btn-primary btn-sm">Edit Type Assessment</button>
                    </a>
                    <a href="{{ route('typeassess.delete', ['id' => $typeassess->id]) }}">
                        <button type="button" class="btn btn-danger btn-sm">Delete Type Assessment</button>
                    </a>

                </div>


            </main>
        </div>
    </div>
@endsection