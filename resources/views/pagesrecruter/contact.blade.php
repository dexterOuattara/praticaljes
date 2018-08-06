@extends('layouts.recruter')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom fley">
        <div class="navbar fixed-top fine">
            <h5>CANDIDATE LIST</h5>
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
                    <!-- STATIC LAYOUT ENDS -->
                        <div class="form-group pull-right">
                            <input class="search form-control" placeholder="What you looking for?" type="text">
                        </div>
                        <span class="counter pull-right">20 items</span>
                        <table class="table table-hover table-bordered results">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th class="col-md-1 col-xs-12">Picture</th>
                                <th class="col-md-3 col-xs-12">Names</th>
                                <th class="col-md-3 col-xs-12">Skills</th>
                                <th class="col-md-3 col-xs-12">Codeln Certificate</th>
                                <th class="col-md-3 col-xs-12">Open for :</th>
                                <th class="col-md-2 col-xs-12">Action</th>
                            </tr>
                            <tr class="warning no-result" style="display: none;">
                                <td colspan="4"><i class="fa fa-warning"></i> No result</td>
                            </tr>
                            </thead>
                            <tbody>
                            @if( $projects )
                                @foreach($projects as $project)
                            <tr visible="true">
                                <th>{{ $loop->iteration }}</th>
                                <td class="text-center"><img height="20px" class="img-circle img-responsive text-center" src="/storage/avatars/{{ $project->avatar }}" /></td>
                                <td>{{ $project->name }}</td>
                                <td>
                                    @foreach($project->skills as $skill)
                                        <p class="btn btn-success">{{$skill->name}}</p>
                                        <br>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($project->rewards as $reward)
                                        <p class="btn btn-success">{{$reward->name}} <img style="padding-left: 35px" class="img-responsive" src="/images2/certificate/{{ $reward->description }}" alt="{{ $reward->description }}"></p>

                                        <br>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($project->typecontracts as $typecontract)
                                        <p class="btn btn-success">{{$typecontract->name}}</p> <br>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="/contact/{{ $project->id }}"><button type="button" class="btn btn-primary btn-xs">
                                            <i class="fa fa-user"> </i> View Profile
                                        </button>
                                    </a>
                                </td>
                            </tr>
                                @endforeach
                            @else
                                <p class="text-center text-primary">No Posts created Yet!</p>
                            @endif
                            </tbody>
                        </table>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>

@stop