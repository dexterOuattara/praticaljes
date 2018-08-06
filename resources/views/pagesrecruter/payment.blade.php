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
            <div class="col-md-12 col-sm-12 col-xs-12" style="padding-bottom:142px ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Congratulation </h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">


                    </div>
                </div>
                <div class="row">
                        <div class="col-md-6 card2" style="padding-top: 10px;padding-bottom: 63px">
                            <div class="text-center">
                                <img style="padding-left: 200px" class="img-responsive text-center" src="../images2/confetti.png"  alt="resume" />

                                <p style="font-size: 18px">You have succefully create your project</p>
                                <p style="font-size: 18px">Send this link at your candidate to register or accept the request from Codeln's members </p>
                            </div>
                        </div>
                        <div class="col-md-6 card2">
                            <div class="text-center">
                                <img style="padding-left: 130px" class="img-responsive text-center" src="../images2/network.png"  alt="resume" />
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@stop