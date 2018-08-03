@extends('layouts.candidate')
@section('content')

    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>
                <div class="row">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Recruteur : {{$calltoapply->name}}</h2>
                            <div class="btn-group" role="group" aria-label="Basic example" style="float:right">
                                <button type="button" class="btn btn-danger">Time : {{$calltoapply->timeassessment}} minutes</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Date Assessment</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form method="post" action="{{ route('pendingproject_detail.form') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="candidate_id" name="candidate_id" value="{{ Auth::user()->id }}">

                                    </div>
                                    {{--<div class="form-group">--}}

                                        {{--<input type="hidden" class="form-control" id="id_title" name="user_id" value="{{ $calltoapply->user_id }}">--}}
                                    {{--</div>--}}

                                    <div class="form-group">

                                        <input type="hidden" class="form-control" id="store_id" name="store_id" value="{{ $calltoapply->id }}">
                                    </div>

                                    {{--<div class="form-group">--}}

                                        {{--<input type="hidden" class="form-control" id="id_title" name="assessment_id" value="{{$calltoapply->assessment_id}}">--}}
                                    {{--</div>--}}
                                    <div class="form-group">
                                        <label for="name">level</label>
                                        <input type="text" class="form-control" id="level" name="level" value="{{$calltoapply->level}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="level" name="framelanguage" value="{{$calltoapply->framelanguage}}">
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="description" name="description" value="{{$calltoapply->description}}">
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="timeassessment" name="timeassessment" value="{{$calltoapply->timeassessment}}">
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="image1" name="image1" value="{{$calltoapply->image1}}">
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="proglanguage" name="proglanguage" value="{{$calltoapply->proglanguage}}">
                                    </div>



                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="hidden" id="requirement1" required="required" name="requirement1"  value="{{$calltoapply->requirement1}}" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="hidden" id="framecss" required="required" name="framecss" value="{{$calltoapply->framecss}}" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="hidden" id="framehtml" required="required" name="framehtml" value="{{$calltoapply->framehtml}}" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Date Assessment</label>
                                            <input type="text" id="dateassessment" required="required" name="dateassessment" value="{{$calltoapply->dateassessment}}" class="form-control col-md-7 col-xs-12">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">End Assessment</label>
                                            <input type="text" id="endassessment" required="required" name="endassessment" value="{{$calltoapply->endassessment}}" class="form-control col-md-7 col-xs-12">
                                    </div>

                                    <div class="form-group">
                                        <label for="mytimeassessment">My Date Assessment</label>
                                        <input type="date" id="mytimeassessment" required="required" name="mytimeassessment" value="" class="form-control col-md-7 col-xs-12">
                                    </div>


                                    <div class="form-group">
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="hidden" id="assessment_id" required="required" name="assessment_id" value="{{$calltoapply->assessment_id}}" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="hidden" id="name" required="required" name="name" value="{{ Auth::user()->name }}" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="hidden" id="validate" required="required" name="validate" value="1" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Accept the offer</button>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Requirement</h2>
                                <div class="btn-group" role="group" aria-label="Basic example" style="float:right">
                                    {{--<button type="button" class="btn btn-danger">Frontend</button>--}}
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <form class="form-horizontal form-label-left" action="requirement.php">

                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-5 col-sm-5">LANGUAGE FRAMEWORK</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="middle-name2" class="btn btn-danger col-md-7 col-xs-12" type="text" name="framelanguage" value="{{$calltoapply->framelanguage}}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-5 col-sm-5">FRAMEWORK CSS</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="middle-name2" class="btn btn-primary col-md-7 col-xs-12" type="text" name="framecss" value="{{$calltoapply->framecss}}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-5 col-sm-5">PROGRAMMING LANGUAGE</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="middle-name2" class="btn btn-success col-md-7 col-xs-12" type="text" name="proglanguage" value="{{$calltoapply->proglanguage}}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-5 col-sm-5">VERSION HTML</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="middle-name2" class="btn btn-dark col-md-7 col-xs-12" type="text" value="{{$calltoapply->framehtml}}" readonly>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@stop