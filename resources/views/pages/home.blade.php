@extends('layouts.default')
@section('content')

    <!--banner-->
    <section  class="section">
        <div class="row text-center cover" style="background-image: url({{ URL::asset('images/hero-image3.png') }});cover">
            <div class="col-md-12">
                <h1 style="color:white;font-size: 38px;">TEST YOUR APPLICANTS MEET THE RIGHT CANDIDATE</h1>
                <h3 style="color:white;font-size: 22px;">Recruit the best tech talent with ease </h3>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <img class="img-responsive" src="{{asset('images/demo/output_tgdt0a.gif')}}" alt="demo app">
                </div>
            </div>
        </div>


    </section>
    <!-- /banner-->



    <!-- Features -->
    <section id="aboutus" class="section">
        <div class="container">
            <div class="row text-center" style="padding-top: 40px">
                <!--<h1 class="titlefeature">Do not waste your time with irrelevant candidates</h1>-->
                {{--<h1 class="titlefeature">Our amazing feature to build your assessment</h1>--}}
                <h1>How is work</h1>
            </div>

            <div class="row container">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <img src="images/features/add.png" class="img-responsive img-circle" height="200px" alt="">
                    <p class="text-center">Select project</p>
                </div>
                <div class="col-md-2">
                    <img src="images/features/variable.jpg" class="img-responsive img-circle" height="200px" alt="">
                    <p class="text-center">Set enviroment variables</p>
                </div>
                <div class="col-md-2">
                    <img src="images/features/custom.jpg" class="img-responsive img-circle" height="200px" alt="">
                    <p class="text-center">Customise requirement</p>
                </div>
                <div class="col-md-2">
                    <img src="images/features/email.jpg" class="img-responsive img-circle" height="200px" alt="">
                    <p class="text-center">Send out invites</p>
                </div>
                <div class="col-md-2">
                    <img src="images/features/report2.jpg" class="img-responsive img-circle" height="200px" alt="">
                    <p class="text-center">Get comprehensive report</p>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>

    <section id="aboutus" class="section">
        <div class="container">
            <div class="row text-center">
                <!--<h1 class="titlefeature">Do not waste your time with irrelevant candidates</h1>-->
                {{--<h1 class="titlefeature">Our amazing feature to build your assessment</h1>--}}
                <h1 style="padding-top:40px">Benenfit</h1>
            </div>

            <div class="row container">
                <div class="col-lg-5 ">
                    <div class="card noed">
                        <img class="card-img-top yum" src="images/features/benefit.png" height="400px" alt="Card image cap">

                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row how2 ">
                        <div class="col-lg-6">
                            <div class="card noed" style="width: 18rem;">
                                <div class="card-body">
                                    <div>
                                        <img class="card-img-top benefit" src="images/features/bank.svg" height="100px" alt="Card image cap">
                                    </div>
                                    <h6 class="card-subtitle mb-2 text-center">Save on recruitment cost</h6>
                                    <p class="card-text text-muted">
                                        Save up on cost of sourcing,screening and assessment by upto 55%
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card noed" style="width: 18rem;">
                                <div class="card-body">
                                    <div>
                                        <img class="card-img-top benefit" src="images/features/time.svg" height="100px" alt="Card image cap">
                                    </div>
                                    <h6 class="card-subtitle mb-2 text-center">Time </h6>
                                    <p class="card-text text-muted">Automation of the screening process reduces hand's on work by upto 60%</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row how2">
                        <div class="col-lg-6">
                            <div class="card noed" style="width: 18rem;">
                                <div class="card-body">
                                    <div>
                                        <img class="card-img-top benefit" src="images/features/screen.svg" height="100px" alt="Card image cap">
                                    </div>
                                    <h6 class="card-subtitle mb-2 text-center">Proper screening of candidates</h6>
                                    <p class="card-text text-muted">Candidate's skill is measured on their capability of doing real world tasks</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card noed" style="width: 18rem;">
                                <div class="card-body">
                                    <div>
                                        <img class="card-img-top benefit" src="images/features/workplace.svg" height="100px" alt="Card image cap">
                                    </div>
                                    <h6 class="card-subtitle mb-2 text-center">Wokplace fit of new employees</h6>
                                    <p class="card-text text-muted">
                                        The screening process merits candidates who can easily assimilate to the company's tech stack.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <a href="/login">
                        <div class="btn btn danger-bg text-center"> Start Now</div>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section id="screenshots" class="section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="titlefeature"> We support </h2>
                <p>Programming Languages, Frameworks, and Libraries...</p>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="card lang" >
                        <img class="card-img-top " src="images/languages/python.svg" height="100px" alt="Card image cap">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card lang">
                        <img class="card-img-top " src="images/languages/php.svg" height="100px" alt="Card image cap">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card lang">
                        <img class="card-img-top " src="images/languages/csharp.svg" height="100px" alt="Card image cap">
                    </div>
                </div>
                <div class="col-sm-3">

                    <div class="card lang">
                        <img class="card-img-top " src="images/languages/ruby.svg" height="100px" alt="Card image cap">
                    </div>
                </div>

                <div class="row" style="margin-top: 5%;margin-left: 5%">
                    <div class="col-sm-3">
                        <div class="card lang" >
                            <img class="card-img-top " src="images/languages/javascript.svg" height="100px" alt="Card image cap">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card lang">
                            <img class="card-img-top " src="images/languages/java.svg" height="100px" alt="Card image cap">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card lang">
                            <img class="card-img-top " src="images/languages/cplusplus.svg" height="100px" alt="Card image cap">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card lang">
                            <img class="card-img-top " src="images/languages/dot-net.svg" height="100px" alt="Card image cap">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Screenshots -->
    <section id="screenshots" class="section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="titlefeature"> Our Amazing Case studie </h2>
                <p>discover how they are improve the recruitment process and save time.</p>
            </div>
            <div id="screenshots_slider">
                <div class="owl-carousel owl-theme">


                    <div class="item">
                        <a href="/casestudie">
                            <img src="{{asset('images/case-studie/mest.png')}}"  alt="mest">
                        </a>
                    </div>

                    <div class="item">
                        <a href="/casestudie">
                            <img src="{{asset('images/case-studie/mtn.png')}}" alt="mtn">
                        </a>
                    </div>
                    <div class="item">
                        <a href="/casestudie">
                            <img src="{{asset('images/case-studie/ruxster.png')}}" alt="ruxster">
                        </a>
                    </div>
                </div>
            </div>
            <div class="section-header text-right" style="padding-top: 10px">
                <p class="btn btn-success">See More</p>
            </div>
        </div>
    </section>
    <!-- /Screenshots -->


    <!-- Latest-News -->
    <section id="blog" class="section">
        <div class="container">
            <div class="row">
                <div class="section-header text-center">
                    <h2 class="titlefeature">Inside</h2>
                    <p>All ressources you need to help .</p>
                </div>


                @foreach($posts as $post)

                    <a href="{{ route('pages.articledetail', ['id' => $post->id]) }}">
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <img src="images/article/contact.jpg" alt="ruxster" style="height: 150px">
                                <div class="caption">
                                    <h6 class="text-left">{{ $post->title }}</h6>
                                    {{--<h6 class="text-left">{{ $post->category->name }}</h6>--}}
                                    <p class="blog-post-meta"><small><i>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }} by <a href="#">{{ $post->name }}</a></i></small></p>

                                    <p class="text-left">{!! \Illuminate\Support\Str::words($post->description, 15, '...') !!}</p>

                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section>

    </section>
    <!-- /Latest-News -->

@stop