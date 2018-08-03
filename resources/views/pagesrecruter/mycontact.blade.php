@extends('layouts.recruter')
@section('content')

    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">LIST CANDIDATE</h3>
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
                                <th class="col-md-3 col-xs-12">Name</th>
                                <th class="col-md-3 col-xs-12">Skill</th>
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
                                        <p class="btn btn-success">{{$skill->name}}</p> <br>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($project->rewards as $reward)
                                        <p class="btn btn-success">{{$reward->name}}</p> <br>
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