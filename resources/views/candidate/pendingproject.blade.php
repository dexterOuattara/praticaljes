@extends('layouts.candidate')
@section('content')
<div class="right_col" role="main">
    <div class="">


        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12" style="padding-bottom: 180px">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>PENDING PROJECT</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="row">
                            @foreach($myprojects as $myproject)
                                <a href="detailsproject/{{ $myproject->id }}">
                                    <div class="col-md-55">
                                        <div class="thumbnail">
                                            <img class="img-responsive text-center" src="{{asset('images/stopwatch.png')}}" alt="send" />
                                        </div>
                                        <div class="caption text-center">
                                            <p>{{$myproject->proglanguage}}</p>
                                        </div>
                                    </div>
                                </a>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop