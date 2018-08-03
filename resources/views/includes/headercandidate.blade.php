<br />

<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">

            <li><a  style="color: white" href="{{ route('candidate.home') }}"><i class="fa fa-home"></i>HOME <span class="label label-success pull-right"></span></a></li>
            <li><a  style="color: white" href="{{ route('candidate.calltoapply') }}"><i class="fa fa-send"></i> CALL TO APPLY <span class="label label-success pull-right"></span></a></li>
            <li><a  style="color: white" href="{{ route('candidate.pendingproject') }}"><i class="fa fa-code"></i>PENDING PROJECT <span class="label label-success pull-right"></span></a></li>
            {{--<li><a href="{{ route('candidate.meeting') }}"><i class="fa fa-user"></i> MY MEETING <span class="label label-success pull-right"></span></a></li>--}}
            <li><a  style="color: white" href="/candidate/myresume"><i class="fa fa-file"></i> MY RESUME <span class="label label-success pull-right">20 % complete</span></a></li>

        </ul>
    </div>


</div>

</div>
</div>

<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->last_name }} {{ Auth::user()->name }}  <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('candidate.logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('candidate.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>

        </nav>
    </div>
</div>
<!-- /top navigation -->