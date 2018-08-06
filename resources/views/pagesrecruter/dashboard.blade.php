@extends('layouts.recruter')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom fley">
        <div class="navbar fixed-top fine">
            <h5>Project library</h5>
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
                <div class="col-md-12" style="padding-bottom: 155px">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>ALL ASSESSMENT </h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <div class="row">

                                    @foreach($dashboards as $dashboard)


                                    <div class="col-md-2">
                                        <a href="/listassessment/{{$dashboard->store_id}}">

                                        <div class="thumbnail">
                                            <img src="images/languages/{{$dashboard->proglanguage}}.svg" alt="image" />
                                        </div>
                                        <div class="caption text-center">
                                         <div class="row">
                                                <div class="col-md-6"><i class="fa fa-handshake-o" aria-hidden="true"> <p>Project :{{$dashboard->store_id}}</p></i></div>
                                                <div class="col-md-6"><i class="fa fa-handshake-o" aria-hidden="true"> <p>Status</p> <p>In Progress</p></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                    @endforeach


                                <a href="/createprojet">
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="images2/add.png"  alt="...">
                                        </div>
                                        <div class="caption text-center">
                                            <p class="text-center">Add Project</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@stop