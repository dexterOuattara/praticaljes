@extends('layouts.default')
@section('content')
<!-- Screenshots -->
<section id="screenshots" class="section" style="padding-top: 120px">
    <div class="container">
        <section id="screenshots" class="section">
            <div class="container">
                <h2 class="titlefeature text-center">they trusted us to optimize the recruitment process</h2>
                <p class="text-center">read their stories to learn about the process</p>
                <div class="row">
                    @foreach($cases as $case)

                    <div class="col-md-4">
                        <a href="{{ route('pages.casestudiedetails', ['id' => $case->id]) }}">
                            <img src="images/case-studie/{{ $case->imageCase }}"  alt="mest">
                        </a>
                    </div>
                    @endforeach

                </div>
                <div class="section-header text-right" style="padding-top: 10px">
                    <p class="btn btn-success">See More</p>
                </div>
            </div>
        </section>
    </div>
</section>

@stop

