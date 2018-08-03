@extends('layouts.recruter')
@section('content')

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>List Candidate</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">


                <div class="col-md-10">
                    <div class="x_panel">
                        <div class="x_content">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">

                                </div>

                                <div class="clearfix"></div>
                                @if( $projects )
                                    @foreach($projects as $project)
                                <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                                    <div class="well profile_view">
                                        <div class="col-sm-12">
                                            <h4 class="brief"><i>Forntend Developer</i></h4>
                                            <div class="left col-xs-7">
                                                <h2>{{ $project->name }}  </h2>

                                                {{--<h2>Country:  {{ $project->country }} </h2>--}}
                                            </div>
                                            <div class="right col-xs-5 text-center">
                                                {{--<img class="img-circle img-responsive" src="/storage/avatars/{{ $project->avatar }}" />--}}
                                            </div>
                                        </div>
                                        {{--<div class="col-xs-12 bottom text-center">--}}
                                            {{--<div class="col-xs-12 col-sm-6 emphasis">--}}
                                                {{--@foreach($project->skills as $skill)--}}
                                                    {{--<p class="btn btn-success">{{$skill->name}}</p> <br>--}}
                                                    {{--@endforeach--}}
                                            {{--</div>--}}
                                            {{--<div class="col-xs-12 col-sm-6 emphasis">--}}
                                                {{--@foreach($project->rewards as $reward)--}}
                                                    {{--<p class="btn btn-success">{{$reward->name}}</p> <br>--}}
                                                {{--@endforeach--}}
                                            {{--</div>--}}
                                            {{--<div class="col-xs-12 col-sm-6 emphasis">--}}
                                                {{--<button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">--}}
                                                    {{--</i> <i class="fa fa-comments-o"></i> </button>--}}
                                                {{--<a href="/contact/{{ $project->id }}"><button type="button" class="btn btn-primary btn-xs">--}}
                                                        {{--<i class="fa fa-user"> </i> View Profile--}}
                                                    {{--</button>--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                                    @endforeach
                                @else
                                    <p class="text-center text-primary">No Posts created Yet!</p>
                                @endif

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

@stop