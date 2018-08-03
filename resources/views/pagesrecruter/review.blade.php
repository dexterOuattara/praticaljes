@extends('layouts.recruter')
@section('content')
    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> Review<small>Project Review</small></h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="tabbable-panel nel">
                                <div class="tabbable-line">
                                    <!---tabs-->
                                    <ul class="nav nav-tabs ">
                                        <li class="active">
                                            <a href="/overview">
                                                Overview</a>
                                        </li>
                                        <li>
                                            <a href="/measure">
                                                Measures </a>
                                        </li>
                                        <li>
                                            <a href="/review">
                                                Project review</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <a href="https://cryptoprize.herokuapp.com/" target="_blank"> <h3>Live Demo</h3></a>
                                        <a href="https://github.com/wildan3105/laravel-blog" target="_blank"> <h3>Github Repository</h3></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>RESUME CANDIDATE PDF</h2>
                                        <form>
                                            <div class="form-group" role="group" aria-label="Basic example" style="float:right">
                                                <input type="file" id="exampleFormControlFile1">
                                            </div>
                                        </form>
                                        <div class="clearfix"></div>
                                    </div>
                                    <embed class="col-md-12 col-sm-12 col-xs-12" src="{{asset('documents/dexterouattaracv.pdf')}}" width="500" height="500" type="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@stop