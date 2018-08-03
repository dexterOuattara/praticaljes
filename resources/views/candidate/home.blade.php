@extends('candidate.layout.candidate')

@section('content')
    <div class="right_col" role="main">
        <div class="">


            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12" style="padding-bottom: 143px">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>HOME</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <div class="row">
                                <a href="/candidate/calltoapply">
                                    <div class="col-md-4 text-center">
                                            <img class="img-responsive text-center" src="{{asset('images/send.png')}}" alt="send" />
                                        <div class="caption text-center">
                                            <p>CALL TO APPLY</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="/candidate/pendingproject">
                                    <div class="col-md-4 text-center">
                                            <img class="img-responsive text-center" src="{{asset('images/stopwatch.png')}}" alt="send" />
                                        <div class="caption text-center">
                                            <p>PENDING PROJECT</p>
                                        </div>
                                    </div>
                                </a>

                                <a href="/candidate/myresume">
                                    <div class="col-md-4 text-center">
                                            <img class="img-responsive text-center" src="{{asset('images/resume.png')}}" alt="send" />
                                        <div class="caption text-center">
                                            <p>MY RESUME</p>
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
@endsection
