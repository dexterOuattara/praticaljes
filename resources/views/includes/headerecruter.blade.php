<br />

<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">

            <ul class="nav side-menu">
                <li><a href="/dashboard"><i class="fa fa-send"></i> DASHBOARD </a></li>
            </ul>
            <ul class="nav side-menu">
                <li><a href="/createprojet"><i class="fa fa-code"></i> CREATE NEW TEST </a></li>
            </ul>
            <ul class="nav side-menu">
                <li><a href="/contact"><i class="fa fa-group"></i> SOURCING CANDIDATE </a></li>
            </ul>
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
                {{--<a id="menu_toggle"><i class="fa fa-bars"></i></a>--}}
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
<!-- /top navigation -->