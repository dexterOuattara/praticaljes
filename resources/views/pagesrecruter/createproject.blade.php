@extends('layouts.recruter')
@section('content')

    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>PROJECT LIBRARY</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">


                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12" style="padding-bottom: 153px">
                    <div class="form-group pull-right">
                        <input class="search form-control" placeholder="What you looking for?" type="text">
                    </div>
                    <span class="counter pull-right">All items</span>
                    <table class="table table-hover table-bordered results">
                        <thead>
                        <tr>
                            <th class="col-md-1 text-center">Numero</th>
                            <th class="col-md-1 text-center">IMAGE</th>
                            <th class="col-md-2 text-center">TYPE OF PROJECT</th>
                            <th class="col-md-3 text-center">Project Name</th>
                            <th class="col-md-2 text-center">DIFFICULTY</th>
                            <th class="col-md-2 text-center">SEE DETAIL</th>
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
                                    <td class="text-center"><img src="images2/project/{{ $project->image1 }}" alt="" height="42" width="42"></td>
                                    <td class="text-center">{{ $project->typeassessment->name }}</td>
                                    <td class="text-center">{{ $project->name }}</td>
                                    <td class="text-center">{{ $project->level }}</td>
                                    <td class="text-center">
                                        <a href="/chooseframelang/{{ $project->id }}"><button type="button" class="btn btn-primary btn-xs">
                                                <i class="fa fa-file-archive-o"> </i> More details
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

@stop