@extends('layouts.candidate')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom fley">
        <div class="navbar fixed-top fine">
            <h2>ADD NEW SKILL</h2>
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
                        {{--<h2>Recruteur : {{$calltoapply->name}}</h2>--}}
                        {{--<div class="btn-group" role="group" aria-label="Basic example" style="float:right">--}}
                        {{--<button type="button" class="btn btn-danger">Time : {{$calltoapply->timeassessment}} minutes</button>--}}
                        {{--</div>--}}
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form method="post" action="{{ route('candidate.candidateskillform') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="candidate_id" name="candidate_id" value="{{ Auth::user()->id }}">
                                </div>
                                <div class="form-group">
                                    <label for="category_id">RewarD</label>
                                    <select class="form-control" name="skill_id">
                                        @foreach($skills as $skill)
                                            <option value="{{$skill->id}}">{{$skill->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="hidden" id="validate" required="required" name="validate" value="1" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Add</button>

                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>


@stop