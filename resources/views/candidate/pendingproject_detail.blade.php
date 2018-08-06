@extends('layouts.candidate')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom fley">
        <div class="navbar fixed-top fine">
            <h5>PENDING PROJECT</h5>
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
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Type project : {{$calltoapply->name}}</h2>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel">

                            <div class="x_content">
                                <form method="post" action="{{ route('pendingproject_detail.form') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="candidate_id" name="candidate_id" value="{{ Auth::user()->id }}">

                                    </div>
                                    {{--<div class="form-group">--}}

                                        {{--<input type="hidden" class="form-control" id="id_title" name="user_id" value="{{ $calltoapply->user_id }}">--}}
                                    {{--</div>--}}

                                    <div class="form-group">
                                        <input type="hidden" class="form-control col-md-2" id="store_id" name="store_id" value="{{ $calltoapply->id }}">
                                    </div>

                                    {{--<div class="form-group">--}}

                                        {{--<input type="hidden" class="form-control" id="id_title" name="assessment_id" value="{{$calltoapply->assessment_id}}">--}}
                                    {{--</div>--}}
                                    <div class="form-group">
                                        <label for="name">level</label>
                                        <input type="text" class="form-control" id="level" name="level" value="{{$calltoapply->level}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="level" name="framelanguage" value="{{$calltoapply->framelanguage}}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="description" name="description" value="{{$calltoapply->description}}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="timeassessment" name="timeassessment" value="{{$calltoapply->timeassessment}}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="image1" name="image1" value="{{$calltoapply->image1}}">
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="proglanguage" name="proglanguage" value="{{$calltoapply->proglanguage}}" readonly>
                                    </div>



                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="hidden" id="requirement1" required="required" name="requirement1"  value="{{$calltoapply->requirement1}}" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="hidden" id="framecss" required="required" name="framecss" value="{{$calltoapply->framecss}}" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="hidden" id="framehtml" required="required" name="framehtml" value="{{$calltoapply->framehtml}}" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Date Assessment</label>
                                            <input type="text" id="dateassessment" required="required" name="dateassessment" value="{{$calltoapply->dateassessment}}" class="form-control col-md-7 col-xs-12" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">End Assessment</label>
                                            <input type="text" id="endassessment" required="required" name="endassessment" value="{{$calltoapply->endassessment}}" class="form-control col-md-7 col-xs-12" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="mytimeassessment">My Date Assessment</label>
                                        <input type="date" id="mytimeassessment" required="required" name="mytimeassessment" value="" class="form-control col-md-7 col-xs-12">
                                    </div>


                                    <div class="form-group">
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="hidden" id="assessment_id" required="required" name="assessment_id" value="{{$calltoapply->assessment_id}}" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="hidden" id="name" required="required" name="name" value="{{ Auth::user()->name }}" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="hidden" id="validate" required="required" name="validate" value="1" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Accept the offer</button>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Requirement</h2>
                                <div class="btn-group" role="group" aria-label="Basic example" style="float:right">
                                    {{--<button type="button" class="btn btn-danger">Frontend</button>--}}
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <form class="form-horizontal form-label-left" action="requirement.php">
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-5 col-sm-5">PROGRAMMING LANGUAGE</label>
                                        <div class="col-md-6 col-sm-6">
                                                <button class="btn btn-success">{{$calltoapply->proglanguage}}</button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-5 col-sm-5">LANGUAGE FRAMEWORK</label>
                                        <div class="col-md-6 col-sm-6">
                                            <button class="btn btn-danger">{{$calltoapply->framelanguage}}</button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-5 col-sm-5">FRAMEWORK CSS</label>
                                        <div class="col-md-6 col-sm-6">
                                            <button class="btn btn-primary">{{$calltoapply->framecss}}</button>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-5 col-sm-5">VERSION HTML</label>
                                        <div class="col-md-6 col-sm-6">
                                            <button class="btn btn-dark">{{$calltoapply->framehtml}}</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@stop