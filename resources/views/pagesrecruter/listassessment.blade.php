@extends('layouts.recruter')
@section('content')
    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>


        </div>
        <div class="row">
            <div class="col-md-12" style="padding-bottom: 340px">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Score candidate</h2>
                        <div class="btn-group" role="group" aria-label="Basic example" style="float:right">
                            <button type="button" class="btn btn-danger">Evaluation in Progress</button>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <!-- start project list -->
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th class="text-center">Rank</th>
                                {{--<th>Picture</th>--}}
                                <th class="text-center">Name</th>
                                <th class="text-center">Source code</th>
                                {{--<th>Identity / Authenticity</th>--}}
                                {{--<th>Evaluate Now</th>--}}
                            </tr>
                            </thead>
                            <tbody>

                            @if(Auth::user())
                            @foreach($dashboards as $dashboard)
                                <tr>
                                    <td class="text-center">{{$loop->iteration}}</td>

                                    <td class="text-center">
                                        <a href="/contact/{{$dashboard->candidate_id}}" target="_blank">{{$dashboard->name}}</a>
                                    </td>

                                    <td class="text-center">
                                        <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> View Project</a>
                                        <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-code"></i> View Code</a>
                                    </td>

                                    {{--<td>--}}
                                        {{--<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Sure </a>--}}
                                    {{--</td>--}}
                                    <td class="text-center">
                                        <a href="/images2/report.png">
                                        <button type="button" class="btn btn-primary btn-xs">Report</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            @else
                                <p>No Posts created Yet!</p>
                            @endif

                            </tbody>
                        </table>
                        <!-- end project list -->

                    </div>
                </div>
            </div>
        </div>
    </div>@stop