<div class="container-fluid">
    <div class="row" style="height: 70vmax">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar" >
            <div class="row" style="width: 100%">
                <div class="col-lg-12">
                    <div>
                        <a class="brandhome codelnlogo" style="text-decoration: none" href="{{ route('candidate.home') }}">CODELN</a>
                    </div>

                </div>
            </div>

            <div class="sidebar-sticky">

                <ul class="nav side-menu">

                    <li><a   href="{{ route('candidate.home') }}"><i class="fa fa-home"></i>HOME <span class="label label-success pull-right"></span></a></li>
                    <li><a   href="{{ route('candidate.calltoapply') }}"><i class="fa fa-send"></i> CALL TO APPLY <span class="label label-success pull-right"></span></a></li>
                    <li><a   href="{{ route('candidate.pendingproject') }}"><i class="fa fa-code"></i>PENDING PROJECT <span class="label label-success pull-right"></span></a></li>
                    <li><a   href="/candidate/myresume"><i class="fa fa-file"></i> MY RESUME </a></li>

                </ul>
            </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

<!-- /top navigation -->