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
                        <a class="nav-link" href="#"></a>
                    </li>
                </ul>
            </nav>

            <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                <img class="img-responsive" src="{{asset("images/project/$assessment->image1")}}" height="200px" alt="{{$assessment->image1}}">
                <img class="img-responsive" src="{{asset("images/project/$assessment->image2")}}" height="200px" alt="{{$assessment->image2}}">
                <img class="img-responsive" src="{{asset("images/project/$assessment->image3")}}" height="200px" alt="{{$assessment->image3}}">
                <img class="img-responsive" src="{{asset("images/project/$assessment->image4")}}" height="200px" alt="{{$assessment->image4}}">
                <img class="img-responsive" src="{{asset("images/project/$assessment->image5")}}" height="200px" alt="{{$assessment->image5}}">
                <img class="img-responsive" src="{{asset("images/project/$assessment->image6")}}" height="200px" alt="{{$assessment->image6}}">

                <h1>Name Project : {{ $assessment->name }}</h1>
                <h2>Level :{{ $assessment->level }}</h2>
                <h2>Type Assessment :{{ $assessment->typeassessment->name }}</h2>
                <h2>Requirement 1 :{{ $assessment->requirement1 }}</h2>
                <h2>Requirement 2 :{{ $assessment->requirement2 }}</h2>
                <h2>Requirement 3 :{{ $assessment->requirement3 }}</h2>
                <h2>Requirement 4 :{{ $assessment->requirement4 }}</h2>
                <h2>Requirement 5 :{{ $assessment->requirement5 }}</h2>
                <h2>Requirement 6 :{{ $assessment->requirement6 }}</h2>
                <h2>Requirement 7 :{{ $assessment->requirement7 }}</h2>
                <h2>Requirement 8 :{{ $assessment->requirement8 }}</h2>
                <h2>Requirement 9 :{{ $assessment->requirement9 }}</h2>
                <h2>Requirement 10 :{{ $assessment->requirement10 }}</h2>
                <div class="col-sm-8 blog-main">
                    <p>Description :{{ $assessment->description }}</p>
                    <a href="{{ route('assessment.edit', ['id' => $assessment->id]) }}">
                        <button type="button" class="btn btn-primary btn-sm">Edit Assessment</button>
                    </a>
                    <a href="{{ route('assessment.delete', ['id' => $assessment->id]) }}">
                        <button type="button" class="btn btn-danger btn-sm">Delete Assessment</button>
                    </a>

                </div>


            </main>
        </div>
    </div>
@endsection