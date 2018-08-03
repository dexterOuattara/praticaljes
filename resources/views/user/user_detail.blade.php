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

                <div class="col-md-5">
                    <img height="100px" class="img-circle img-responsive text-center" src="/storage/avatars/{{ $user->avatar }}" />

                    <p>Name : {{ $user->name }}</p>
                    <p>Last Name :{{ $user->last_name }}</p>
                    <p>Email : {{ $user->email }}</p>


                </div>

                <div class="col-md-5">
                    <p>Phone :{{ $user->phone }}</p>
                    <p>Mobile :{{ $user->mobile }}</p>
                    <p>Address :{{ $user->address }}</p>
                    <p>Linkedin :{{ $user->linkedin }}</p>
                    <p>Facebook :{{ $user->facebook }}</p>
                    <p>Github :{{ $user->github }}</p>
                    <p>Twitter :{{ $user->twitter }}</p>
                    <p>Biography :{{ $user->biography }}</p>
                    <p>Website :{{ $user->website }}</p>

                </div>

        </div>

        <div class="row">
            {{--<a href="{{ route('user.edit', ['id' => $user->id]) }}">--}}
                {{--<a href="{{ route('user.edit', ['id' => $user->id]) }}">--}}
                {{--<button type="button" class="btn btn-primary btn-sm">Edit Post</button>--}}
            {{--</a>--}}
            <a href="{{ route('user.delete', ['id' => $user->id]) }}">
                <button type="button" class="btn btn-danger btn-sm">Delete Post</button>
            </a>
        </div>
    </div>
@endsection