@extends('layouts.candidate')
@section('content')

    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>
            <div class="row">
                <div class="x_panel">
                    <div class="x_title">
                        {{--<h2>Recruteur : {{$calltoapply->name}}</h2>--}}
                        {{--<div class="btn-group" role="group" aria-label="Basic example" style="float:right">--}}
                            {{--<button type="button" class="btn btn-danger">Time : {{$calltoapply->timeassessment}} minutes</button>--}}
                        {{--</div>--}}
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Add New Skill</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form method="post" action="{{ route('candidate.candidateskillform') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="candidate_id" name="candidate_id" value="{{ Auth::user()->id }}">
                                </div>
                                <div class="form-group">
                                    <label for="category_id">PROGRAMMING LANGUAGE</label>
                                    <select class="form-control" name="skill_id">
                                        @foreach($skills as $skill)
                                            <option value="{{$skill->id}}">{{$skill->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="hidden" id="validate" required="required" name="validate" value="1" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Add</button>

                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>


@stop