@extends('layouts.candidate')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom fley">
        <div class="navbar fixed-top fine">
            <h5>Call To Apply</h5>

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


        </div>
        <div class="row">
            <div class="col-md-12" style="padding-bottom: 22px">
                <div class="x_panel">
                    <div class="x_title">
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="form-group pull-right">
                            <input class="search form-control" placeholder="What you looking for?" type="text">
                        </div>
                        <span class="counter pull-right">All items</span>
                        <table class="table table-hover table-bordered results">
                            <thead>
                            <tr>
                                <th>Code Project</th>
                                <th>Type Project</th>
                                <th>Assessment Date</th>
                                <th>Type Assessment</th>
                                <th>Language</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($calltoapplys as $calltoapply)

                                <tr visible="true">
                                <td class="text-center">#{{$calltoapply->id}}</td>
                                <td>
                                    <a>{{$calltoapply->name}}</a>
                                </td>
                                <td>
                                    {{$calltoapply->dateassessment}}
                                </td>
                                <td>
                                    {{$calltoapply->typeassessment}}
                                </td>
                                <td>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-html5"></i> {{$calltoapply->proglanguage}} </a>
                                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> {{$calltoapply->framelanguage}} </a>
                                    <a href="#" class="btn btn-success btn-xs"><i class="fa fa-code"></i> {{$calltoapply->framecss}} </a>
                                    <a href="#" class="btn btn-dark btn-xs"><i class="fa fa-code"></i> {{$calltoapply->framehtml}} </a>
                                </td>
                                <td>
                                    <a href="pendingproject_detail/{{ $calltoapply->id }}">
                                    <button type="button" class="btn btn-success btn-xs">See more</button>
                                    </a>
                                </td>

                            </tr>
                            @endforeach

                            </tbody>


                        </table>
                        <!-- end project list -->

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop