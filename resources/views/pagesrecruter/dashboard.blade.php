@extends('layouts.recruter')
@section('content')

    <div class="right_col" role="main">
        <div class="">


            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12" style="padding-bottom: 155px">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>ALL ASSESSMENT </h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <div class="row">

                                    @foreach($dashboards as $dashboard)

                                    <a href="/listassessment/{{$dashboard->store_id}}">

                                    <div class="col-md-55">
                                        <div class="thumbnail">
                                            <img src="images/languages/{{$dashboard->proglanguage}}.svg" alt="image" />
                                        </div>
                                        <div class="caption text-center">
                                         <div class="row">
                                                <div class="col-md-6"><i class="fa fa-handshake-o" aria-hidden="true"> <p>Project :{{$dashboard->store_id}}</p></i></div>
                                                <div class="col-md-6"><i class="fa fa-handshake-o" aria-hidden="true"> <p>Status</p> <p>In Progress</p></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                    @endforeach


                                <a href="/createprojet">
                                    <div class="col-md-55">
                                        <div class="thumbnail">
                                            <img src="images2/add.png"  alt="...">
                                        </div>
                                        <div class="caption text-center">
                                            <p>Add Project</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@stop