@extends('candidate.layout.candidate')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom fley">
        <div class="navbar fixed-top fine">
            <h5>HOME</h5>
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
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <div class="row">
                                <a href="/candidate/calltoapply">
                                    <div class="col-md-4 text-center">
                                            <img class="img-responsive text-center" src="{{asset('images/send.png')}}" alt="send" />
                                        <div class="caption">
                                            <p class="text-center">CALL TO APPLY</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="/candidate/pendingproject">
                                    <div class="col-md-4 text-center">
                                            <img class="img-responsive text-center" src="{{asset('images/stopwatch.png')}}" alt="send" />
                                        <div class="caption text-center">
                                            <p>PENDING PROJECT</p>
                                        </div>
                                    </div>
                                </a>

                                <a href="/candidate/myresume">
                                    <div class="col-md-4 text-center">
                                            <img class="img-responsive text-center" src="{{asset('images/resume.png')}}" alt="send" />
                                        <div class="caption text-center">
                                            <p>MY RESUME</p>
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
@endsection
