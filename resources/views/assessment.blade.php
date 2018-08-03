@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">User <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('post.form') }}">Create Post</a>
                    </li>
                </ul>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('casestudy.form') }}">Create Case Study</a>
                    </li>
                </ul>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.case') }}">List Case Study</a>
                    </li>
                </ul>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.user') }}">List User</a>
                    </li>
                </ul>
            </nav>

            <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                <h1>Assessment
                    <a href="{{ route('assessment.form') }}">
                        <button type="button" class="btn btn-primary btn-sm">Create Assessment</button>
                    </a>
                </h1>

                @if(Session::has('success'))
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                            <div id="message" class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        </div>
                    </div>
                @endif
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Descritption</th>
                        <th>level</th>
                        <th>Type Assessment</th>
                        <th>Learn more</th>
                        <th>Created on</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($assessments)
                        @foreach($assessments as $assessment)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <th>
                                    <img class="img-responsive" src="{{asset("images2/$assessment->image1")}}" height="40px" alt="{{$assessment->image1}}">
                                </th>
                                <td>{{ $assessment->name }}</td>
                                <td>{{ $assessment->description }} </td>
                                <td>{{ $assessment->level }} </td>
                                <td>{{ $assessment->typeassessment->name }} </td>
                                <td>
                                    <a href="{{ route('assessment.detail', ['id' => $assessment->id]) }}">view more</a>
                                </td>
                                <td>{{ Carbon\Carbon::parse($assessment->created_at)->format('d-m-Y')  }}</td>
                            </tr>
                        @endforeach
                    @else
                        <p class="text-center text-primary">No Posts created Yet!</p>
                    @endif
                </table><Br>
            </main>
        </div>
    </div>
@endsection