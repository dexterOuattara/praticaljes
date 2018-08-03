@extends('layouts.candidate')
@section('content')

    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>


        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Call To Apply</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <!-- start project list -->
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th>Code Project</th>
                                <th>Company</th>
                                <th>Assessment Date</th>
                                <th>Type Assessment</th>
                                <th>Language</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($calltoapplys as $calltoapply)

                                <tr visible="true">
                                <td class="text-center">#{{$calltoapply->id}}</td>
                                <td>
                                    <a>{{$calltoapply->name}}</a>
                                </td>
                                <td>
                                    {{$calltoapply->dateassessment}}
                                </td>
                                <td>
                                    Frontend
                                </td>
                                <td>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-html5"></i> {{$calltoapply->proglanguage}} </a>
                                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> {{$calltoapply->framelanguage}} </a>
                                    <a href="#" class="btn btn-success btn-xs"><i class="fa fa-code"></i> {{$calltoapply->framecss}} </a>
                                    <a href="#" class="btn btn-dark btn-xs"><i class="fa fa-code"></i> {{$calltoapply->framehtml}} </a>
                                </td>
                                <td>
                                    <a href="pendingproject_detail/{{ $calltoapply->id }}">
                                    <button type="button" class="btn btn-success btn-xs">See more</button>
                                    </a>
                                </td>

                            </tr>
                            @endforeach

                            </tbody>


                        </table>
                        <!-- end project list -->

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop