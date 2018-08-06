@extends('layouts.candidate')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom fley">
        <div class="navbar fixed-top fine">
            <h5>MY RESUME</h5>
            <nav>
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @else
                    <li style="list-style-type: none;float: right;">
                        <img src="/storage/avatars/{{ Auth::user()->avatar }}" width="30" height="30" alt="">
                    </li>
                    <li class="nav-item dropdown" style="list-style-type: none;float: right;">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->last_name }} {{ Auth::user()->name }}  <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                    </ul>

            </nav>
        </div>
    </div>

    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Social Account</h2>
                            <div class="clearfix"></div>
                        </div>
                        <form action="{{ route('candidate.update_myresume') }}" class="form-horizontal form-label-left" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Nom</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }} ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Email / Contact Phone* </label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Github</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control" name="github" value="{{ Auth::user()->github }}">
                                    <span class="fa fa-github form-control-feedback right" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Linkedin</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control" name="linkedin" value="{{ Auth::user()->linkedin }}">
                                    <span class="fa fa-linkedin form-control-feedback right" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Facebook</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control" name="facebook" value="{{ Auth::user()->facebook }}">
                                    <span class="fa fa-facebook form-control-feedback right" aria-hidden="true"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button id="send" type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>



                    </div>


                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>My profile Picture</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <form action="{{ route('candidate.update_photocandidate') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <img class="rounded-circle" src="/storage/avatars/{{ Auth::user()->avatar }}" />

                                        <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp" value="">
                                        <!-- badge -->
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button id="send" type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
<div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>My Skills </h2>
                <div class="btn-group" role="group" aria-label="Basic example" style="float:right">
                    <button type="button" class="btn btn-danger">Do you have New skill</button>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @if(Auth::user())

                    @foreach(Auth::user()->skills as $skill)
                            <button type="button" class="btn btn-round btn-default">{{$skill->name}}</button>
                    @endforeach
                @else
                    <p>No Posts created Yet!</p>
                @endif
            </div>
            <div class="btn-group" role="group" aria-label="Basic example" style="float:right">
                <a href="candidateskillform">
                    <button type="button" class="fa fa-pencil btn btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Choose here</button>
                </a>
            </div>
        </div>
        </div>
    <div class="col-md-4 col-sm-4 col-xs-12">

    <div class="x_panel">
            <div class="x_title">
                <h2>I Looking </h2>
                <div class="btn-group" role="group" aria-label="Basic example" style="float:right">
                    <button type="button" class="btn btn-danger">Do you want New contract</button>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @foreach(Auth::user()->typecontracts as $typecontract)

                    <button type="button" class="btn btn-round btn-warning">{{$typecontract->name}}</button>
                @endforeach

            </div>
            <div class="btn-group" role="group" aria-label="Basic example" style="float:right">
                <a href="candidatescontractform">
                    <button type="button" class="fa fa-pencil btn btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Choose here</button>
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12">

        <div class="x_panel">
            <div class="x_title">
                <h2>Reward </h2>
                <div class="btn-group" role="group" aria-label="Basic example" style="float:right">
                    <button type="button" class="btn btn-danger">Do you want New contract</button>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @foreach(Auth::user()->rewards as $rewards)
                    <br>
                    <p class="btn btn-success">{{$rewards->name}} <img class="img-responsive" src="/images2/certificate/{{ $rewards->description }}" alt="{{ $rewards->description }}"></p>

                @endforeach

            </div>
        </div>
    </div>

            </div>
        </div>
    </div>

@stop