<body id="home">

<!-- Header -->
<header id="header" class="nav-stacked affix-top" data-spy="affix" data-offset-top="10">
    <!-- Navigation -->
    <nav id="navigation_bar" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <div class="logo">
                    <a href="/"><img src="{{asset('images/logo.png')}}" alt="image"/></a>
                </div>
                <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="nav navbar-nav">
                    <li><a href="/" class="js-target-scroll"><i class="glyphicon glyphicon-send"></i>Pricing</a></li>
                    <li><a href="/casestudie" class="js-target-scroll"><i class="fa fa-folder-open"></i>Case studie</a></li>
                    <li><a href="/inside" class="js-target-scroll"><i class="fa fa-lightbulb-o"></i>Inside </a></li>
                    <li class="/freetrial"><a href="#" class="js-target-scroll"><i class="fa fa-clock-o"></i>Free Trial </a></li>

                    @if (Route::has('login'))
                        <li>
                            @auth
                                <a href="{{ url('/createprojet') }} " class="js-target-scroll"><i class="fa fa-user-circle"></i>My Account</a>
                            @else
                                <a href="{{ route('login') }}" class="js-target-scroll"><i class="fa fa-sign-in"></i>Recruter</a>
                                <a href="{{ route('candidate.login') }}" class="js-target-scroll"><i class="fa fa-lock"></i>Candidate</a>
                            @endauth
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation end -->

</header>
<!-- /Header -->