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
                        {{--<a class="nav-link" href="{{ route('post.form') }}">Create Post</a>--}}
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
                <h1>Case Study
                    <a href="{{ route('casestudy.form') }}">
                        <button type="button" class="btn btn-primary btn-sm">Create Case Study</button>
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
                        <th>Title</th>
                        <th>Descritpion</th>
                        <th>Learn more</th>
                        <th>Created on</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($casestadies)
                        @foreach($casestadies as $casestadie)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $casestadie->name }} </td>
                                <td>{{ $casestadie->description }} </td>
                                <td>
                                    <a href="{{ route('casestudy.detail', ['id' => $casestadie->id]) }}">view more</a>
                                </td>
                                <td>{{ $casestadie->created_at }} </td>

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