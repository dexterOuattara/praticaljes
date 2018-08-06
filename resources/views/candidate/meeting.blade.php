@extends('layouts.candidate')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom fley">
        <div class="navbar fixed-top fine">
            <h5>MEETING</h5>
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
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Meeting</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <!-- start project list -->
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Company</th>
                                <th>Date Meeting</th>
                                <th>Location</th>
                                <th>Type Assessment</th>
                                <th>Language</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>#</td>
                                <td>
                                    <a>MTN</a>
                                </td>
                                <td>
                                    04/26/2018 at 02:00 PM
                                </td>
                                <td>
                                    <a href="" target="_blank"> Ghana</a>
                                </td>
                                <td>
                                    Frontend
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-html5"></i> html </a>
                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> javascropt </a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-code"></i> boostrap </a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn-xs">Add</button>
                                </td>

                            </tr>
                            <tr>
                                <td>#</td>
                                <td>
                                    <a>Meltwater</a>
                                </td>
                                <td>
                                    05/06/2018 at 05:00 PM
                                </td>
                                <td>
                                    <a href="" target="_blank"> USA</a>
                                </td>
                                <td>
                                    Backend
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> php </a>
                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> laravel </a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-code"></i> boostrap </a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn-xs">Add</button>
                                </td>

                            </tr>
                            <tr>
                                <td>#</td>
                                <td>
                                    <a>Microsoft</a>
                                </td>
                                <td>
                                    05/01/2018 at 01:00 PM
                                </td>
                                <td>
                                    <a href="" target="_blank"> Paris</a>
                                </td>
                                <td>
                                    USA
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> ruby </a>
                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> ruby and rails </a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-code"></i> bulma </a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn-xs">Add</button>
                                </td>

                            </tr>


                            </tbody>
                        </table>
                        <!-- end project list -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop