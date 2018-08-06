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
            <div class="col-md-12" style="padding-bottom: 180px">
                <div class="x_panel">
                    <div class="x_title">
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="row">
                            @foreach($myprojects as $myproject)
                                <a href="detailsproject/{{ $myproject->id }}">
                                    <div class="col-md-55">
                                        <div class="thumbnail">
                                            <img class="img-responsive text-center" src="{{asset('images/stopwatch.png')}}" alt="send" />
                                        </div>
                                        <div class="caption text-center">
                                            <p>{{$myproject->proglanguage}}</p>
                                        </div>
                                    </div>
                                </a>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop