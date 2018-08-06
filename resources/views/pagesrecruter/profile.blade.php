@extends('layouts.recruter')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        @if ($message = Session::get('success'))

            <div class="alert alert-success alert-block">

                <button type="button" class="close" data-dismiss="alert">×</button>

                <strong>{{ $message }}</strong>

            </div>

        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Social Account</h2>
                        <div class="clearfix"></div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3 caracter"> Nom :</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <p>{{ $project->name }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3 caracter">Email :</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <p>{{ $project->email }}</p>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3 caracter">Github :</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <p>{{ $project->github }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3 caracter">Linkedin :</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <p>{{ $project->linkedin }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3 caracter">Facebook :</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <p>{{ $project->facebook }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3 caracter">Twitter :</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <p>{{ $project->twitter }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3 caracter">Country :</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <p>{{ $project->country }}</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3 caracter">Zip :</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                        <p>{{ $project->zip }}</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3 caracter">Mobile :</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                        <p>{{ $project->mobile }}</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3 caracter">Address :</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <p>{{ $project->address }}</p>
                        </div>
                    </div>

                </div>


            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>My profile Picture</h2>
                        <div class="btn-group" role="group" aria-label="Basic example" style="float:right">
                            <a href="mailto:{{ $project->email }}?Subject=Hello%20again">
                                <i class="fa fa-send"> </i> {{ $project->email }}
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <div class="form-group">
                                <img class="img-circle img-responsive" src="/storage/avatars/{{ $project->avatar }}" />

                            </div>
                        </div>
                        <div class="col-md-12">

                            <h1> Backend skill</h1>
                            @foreach($project->skills as $skill)
                                <li class="btn btn-danger seperate">{{$skill->name}}</li>
                            @endforeach
                        </div>

                        <div class="col-md-12">
                            <h1> Reward</h1>
                            @foreach($project->rewards as $reward)
                                <li class="btn btn-success">{{$reward->name}} <img style="padding-left: 35px" class="img-responsive" src="/images2/certificate/{{ $reward->description }}" alt="{{ $reward->description }}"></li>

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
    <!-- /page content -->

@stop