@extends('layouts.default')
@section('content')
<!-- Screenshots -->
<section id="screenshots" class="section" style="padding-top: 120px;padding-bottom: 50px">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>{{ $case->name }}</h4>
                <p>{{ $case->description }}</p>
                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                    <div class="btn-group padding" role="group">
                        <button type="button" class="btn btn-default">Download PDF</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <iframe width="500" height="320" src="{{ $case->emberVideo }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>

    </div>
</section>

<section id="screenshots" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="vertical_box">
                    <div class="box-icon">
                        <i class="fa fa-bullseye"></i>
                    </div>
                    <div class="box-info">
                        <h6>Challenge</h6>
                        <p>{!! \Illuminate\Support\Str::words($case->challenge, 50, '...') !!}</p>
                    </div>
                </div>
                <div class="vertical_box">
                    <div class="box-icon">
                        <i class="fa fa-pie-chart"></i>
                    </div>
                    <div class="box-info">
                        <h6>Solution</h6>
                        <p>{!! \Illuminate\Support\Str::words($case->solution, 50, '...') !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="vertical_box">
                    <div class="box-info">
                        <i class="fa fa-users fa-3x tomato"></i><span class="bigsize animated infinite bounce"> {{ $case->numberOfApplicants }} </span>
                        <h6>Number of Applicants </h6>
                        <p>We fund the right condidate for the formal interview online and in the office.</p>
                    </div>
                    <div class="box-info">
                        <i class="fa fa-building fa-3x tomato"></i> <span class="bigsize"> {{ $case->numberOfMeeting }} </span>
                        <h6>Number of Meeting</h6>
                        <p>We fund the right condidate for the formal interview online and in the office.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="vertical_box">
                    <div class="box-info">
                        <i class="fa fa-calendar fa-3x tomato"></i><span class="bigsize"> {{ $case->numberOfDaysSaves }} </span>
                        <h6>Number of days saves</h6>
                        <p>with Codeln we test all applicants in 3 days.It's amazing.</p>
                    </div>
                    <div class="box-info">
                        <i class="fa fa-user fa-3x tomato"></i><span class="bigsize"> {{ $case->numberOfHiring }} </span>
                        <h6>Number of hiring</h6>
                        <p>Our new talented employees.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- /Screenshots -->
@stop



