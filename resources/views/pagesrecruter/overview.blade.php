@extends('layouts.recruter')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> Measure<small>Criteria for Grading</small></h2>
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
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="images2/user/55.jpg">
                                </div>
                                <div class="col-md-4">
                                    <p><strong>Name:</strong> Joe Jones</p>
                                    <p><strong>Project Name:</strong> Bitcoin App</p>
                                    <p><strong>Position Applied For:</strong> Junior Engineer</p>
                                    <p><strong>Date:</strong> 12th May, 2018</p>
                                </div>
                                <div class="col-md-5">
                                    <p><strong>Recruiter's Vote:</strong></p>

                                </div>
                            </div>
                            <hr>
                            <!---marks--->
                            <div class="row" style="margin-top: 40px">
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p><strong>Time Spent (Minutes)</strong></p>
                                            <p><strong>45</strong></p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p ><strong>Overall Score</strong></p>
                                            <p  ><strong>78%</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p ><strong>Competency</strong></p>
                                            <p ><strong>High</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p><strong>Defect Level</strong></p>
                                            <p><strong>Low</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---overview--->
                            <div class="reportspace">
                                <div>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h5 class="text-center">Base language used</h5>
                                            <div class="text-center">
                                                Javascript (es6)

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <h5 class="text-center">Frameworks used</h5>
                                            <div class="text-center">
                                                Angular
                                                git
                                                heroku
                                            </div>

                                        </div>

                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <h5 class="text-center">Time alloted</h5>
                                                2 hrs

                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!---proffieciency--->
                            <div class="reportspace">
                                <div class="col-lg-12 ">
                                    <h4 class="text-center">Candidate profficiency</h4>
                                    <hr>
                                    <div class="row">


                                        <div class="col-lg-3  profficiencycard">
                                            <a href="#">
                                                <div class="profficiencycardtitle"> core javascript</div>
                                                <div class="profficiencycardtext"> 60 points</div>
                                            </a>

                                        </div>
                                        <div class="col-lg-3  profficiencycard">
                                            <a href="#">
                                                <div class="profficiencycardtitle">Angular</div>

                                                <div class="profficiencycardtext"> 70 points</div>
                                            </a>

                                        </div>
                                        <div class="col-lg-3  profficiencycard" >
                                            <a href="#">
                                                <div class="profficiencycardtitle">version control</div>

                                                <div class="profficiencycardtext"> 58 points</div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3  profficiencycard" >
                                            <a href="#">
                                                <div class="profficiencycardtitle">problem decomposition</div>

                                                <div class="profficiencycardtext"> 50 points</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---deliverables--->
                            <div class="reportspace">
                                <div class="col-lg-12 report4">
                                    <div class="text-center">
                                        <h4 class="text-center">Project deliverables</h4>
                                    </div>
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col">Deliverable</th>
                                            <th scope="col">status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Improved UI/UX</td>
                                            <td><span class="badge badge-success">Success</span></td>
                                        </tr>
                                        <tr>

                                            <td>Sign up for users at your Client's company</td>

                                            <td><span class="badge badge-success">Success</span></td>
                                        </tr>
                                        <tr>

                                            <td>Login (you are free to use a package such as Passport for Authentication)</td>
                                            <td><span class="badge badge-success">Success</span></td>
                                        </tr>
                                        <tr>

                                            <td>Integration with at least 3 exchanges</td>
                                            <td><span class="badge badge-warning">2/3 complete</span></td>
                                        </tr>
                                        <tr>

                                            <td>Persist the market data in a PostgreSQL database</td>
                                            <td><span class="badge badge-danger">Incomplete</span></td>
                                        </tr>
                                        <tr>

                                            <td>Allow users to set up alerts for a certain price point</td>
                                            <td><span class="badge badge-danger">Incomplete</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <!---code quality--->
                            <div class="reportspace">
                                <div class="col-lg-12">
                                    <h4 class="text-center">Code quality</h4>
                                    <hr>

                                    <div id="chart" style="height: 300px; width: 100%;"></div>



                                </div>

                            </div>
<div class="row text-center">
    <h1>Social Contributions</h1>
</div>
<div class="row text-center">

    <div class="col-md-6 text-center">
        <h2> stack overflow badges</h2>

        <div class="col-md-4">
            <img src="images2/github/icons8-bronze-medal-48.png" alt="">
            <h1>1</h1>
        </div>
        <div class="col-md-4">
            <img src="images2/github/icons8-gold-medal-48.png" alt="">
            <h1>4</h1>
        </div>
        <div class="col-md-4">
            <img src="images2/github/icons8-silver-medal-48.png" alt="">
            <h1>12</h1>
        </div>
    </div>

    <div class="col-md-6 text-center">
        <h2>Github</h2>
        <p>Number of repos : 38</p>
        <p>Followers : 10</p>
        <p>languages used: javascript,python</p>
    </div>
</div>


                </div>
            </div>

        </div>

    </div>
@stop