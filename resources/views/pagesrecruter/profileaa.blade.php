@extends('layouts.recruter')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">


        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">

                        <h2>{{ $project->name }} <strong>from</strong>  {{ $project->country }}</h2>
                        <div class="btn-group" role="group" aria-label="Basic example" style="float:right">
                            <a href="mailto:{{ $project->email }}?Subject=Hello%20again">
                                <i class="fa fa-send"> </i> {{ $project->email }}
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-circle img-responsive" src="/storage/avatars/{{ $project->avatar }}" />
                                </div>
                            </div>

                            <ul class="list-unstyled user_data">
                                <li><i class="fa fa-map-marker user-profile-icon"></i> {{ $project->address }}
                                </li>

                                <li>
                                    <i class="fa fa-briefcase user-profile-icon"></i> Software Engineer
                                </li>

                                <li>
                                    <a href="{{ $project->github }}" target="_blank"><i class="fa fa-github">{{ $project->github }}</i></a>
                                </li>
                                <li>
                                    <a href="{{ $project->linkedin }}" target="_blank"><i class="fa fa-linkedin">{{ $project->linkedin }}</i></a>
                                </li>
                                <li>
                                    <a href="{{ $project->facebook }}" target="_blank"><i class="fa fa-facebook"></i>{{ $project->facebook }}</a>
                                </li>
                                <li>
                                    <a href="{{ $project->twitter }}" target="_blank"><i class="fa fa-twitter"></i>{{ $project->facebook }}</a>
                                </li>
                                <li class="m-top-xs">
                                    <i class="fa fa-external-link user-profile-icon"></i>
                                    <a href="{{ $project->website }}" target="_blank">{{ $project->website }}</a>
                                </li>

                            </ul>

                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                    <!-- <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Recent Activity</a>
                                    </li> -->
                                    <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Past Projects</a>
                                    </li>
                                    <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Biography</a>
                                    </li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div ="tabpanel" class="tab-pane fade" id="tab_content1" aria-labelledby="home-tab">

                                        <!-- start recent activity -->
                                        <ul class="messages">
                                            <li>
                                                <img src="images2/img.jpg" class="avatar" alt="Avatar">
                                                <div class="message_date">
                                                    <h3 class="date text-info">24</h3>
                                                    <p class="month">May</p>
                                                </div>
                                                <div class="message_wrapper">
                                                    <h4 class="heading">Desmond Davison</h4>
                                                    <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                                    <br />
                                                    <p class="url">
                                                        <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                        <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="images2/img.jpg" class="avatar" alt="Avatar">
                                                <div class="message_date">
                                                    <h3 class="date text-error">21</h3>
                                                    <p class="month">May</p>
                                                </div>
                                                <div class="message_wrapper">
                                                    <h4 class="heading">Brian Michaels</h4>
                                                    <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                                    <br />
                                                    <p class="url">
                                                        <span class="fs1" aria-hidden="true" data-icon=""></span>
                                                        <a href="#" data-original-title="">Download</a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="images2/img.jpg" class="avatar" alt="Avatar">
                                                <div class="message_date">
                                                    <h3 class="date text-info">24</h3>
                                                    <p class="month">May</p>
                                                </div>
                                                <div class="message_wrapper">
                                                    <h4 class="heading">Desmond Davison</h4>
                                                    <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                                    <br />
                                                    <p class="url">
                                                        <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                        <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="images2/img.jpg" class="avatar" alt="Avatar">
                                                <div class="message_date">
                                                    <h3 class="date text-error">21</h3>
                                                    <p class="month">May</p>
                                                </div>
                                                <div class="message_wrapper">
                                                    <h4 class="heading">Brian Michaels</h4>
                                                    <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                                    <br />
                                                    <p class="url">
                                                        <span class="fs1" aria-hidden="true" data-icon=""></span>
                                                        <a href="#" data-original-title="">Download</a>
                                                    </p>
                                                </div>
                                            </li>

                                        </ul>
                                        <!-- end recent activity -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content2" aria-labelledby="profile-tab">

                                        <!-- start user projects -->
                                        <table class="data table table-striped no-margin">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Project Name</th>
                                                <th>Client Company</th>
                                                <th class="hidden-phone">Hours Spent</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <tr>
                                                <td>1</td>
                                                <td>Ecommerce Website</td>
                                                <td>Deveint Inc</td>
                                                <td class="hidden-phone">1</td>

                                            </tr>

                                            </tbody>
                                        </table>
                                        <!-- end user projects -->

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm3 col-xs-12">
                            <div class="col-md-12">
                                <h1> Backend skill</h1>
                                @foreach($project->skills as $skill)
                                    <li class="btn btn-danger">{{$skill->name}}</li>
                                @endforeach
                            </div>

                            <div class="col-md-12">
                                <h1> Reward</h1>
                                @foreach($project->rewards as $reward)
                                    <li class="btn btn-danger">{{$reward->name}}</li>
                                @endforeach
                            </div>

                            <div class="col-md-12">
                                <h1> Open for :</h1>
                                @foreach($project->typecontracts as $typecontract)
                                    <li class="btn btn-danger">{{$typecontract->name}}</li>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /page content -->

@stop