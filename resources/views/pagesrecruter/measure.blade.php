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
                                    <div class="card" >
                                        <div class="criteriaspaces text-center">
                                            <p id='bigp'><strong>Tests Passed</strong></p>
                                            <p id='smallp'>(Total Number of Tests Passed)</p>
                                            <p id='biggestp' style="color:rgb(0, 128, 28);" ><strong>4</strong></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p id='bigp'><strong>Tests Failed</strong></p>
                                            <p id='smallp'>(Total Number of Tests Failed)</p>
                                            <p id='biggestp' style="color:rgb(241, 7, 7);" ><strong>1</strong></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p id='bigp'><strong>Errors</strong></p>
                                            <p id='smallp'>(Total Number of Errors)</p>
                                            <p id='biggestp' style="color:rgb(241, 7, 7);" ><strong>5</strong></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p id='bigp'><strong>Bugs</strong></p>
                                            <p id='smallp'>(Total Number of Bugs)</p>
                                            <p id='biggestp' style="color:rgb(241, 7, 7);" ><strong>4</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p id='bigp'><strong>Technical Debt</strong></p>
                                            <p id='smallp'>(Number of Tests Passed)</p>
                                            <p id='biggestp' style="color:rgb(241, 7, 7);" ><strong>7</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p id='bigp'><strong>Code Smells</strong></p>
                                            <p id='smallp'>(Number of Tests Passed)</p>
                                            <p id='biggestp' ><strong>7%</strong></p>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p id='bigp'><strong>Code Coverage</strong></p>
                                            <p id='smallp'>(Number of Tests Passed)</p>
                                            <p id='biggestp' ><strong>7%</strong></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p id='bigp'><strong>Clone Coverage</strong></p>
                                            <p id='smallp'>(Number of Tests Passed)</p>
                                            <p id='biggestp'><strong>60</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p id='bigp'><strong>Lines of Code</strong></p>
                                            <p id='smallp'>(Number of Tests Passed)</p>
                                            <p id='biggestp' ><strong>70</strong></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p id='bigp'><strong>Duplications</strong></p>
                                            <p id='smallp'>(Number of Tests Passed)</p>
                                            <p id='biggestp'><strong>4</strong></p>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p id='bigp'><strong>Number of Classes</strong></p>
                                            <p id='smallp'>(Number of Tests Passed)</p>
                                            <p id='biggestp' ><strong>4</strong></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p id='bigp'><strong>Maintainability</strong></p>
                                            <p id='smallp'>(Number of Tests Passed)</p>
                                            <p id='biggestp'><strong>4</strong></p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p id='bigp'><strong>Dependencies</strong></p>
                                            <p id='smallp'>(Number of Tests Passed)</p>
                                            <p id='biggestp'><strong>4</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p id='bigp'><strong>Number of Warnings</strong></p>
                                            <p id='smallp'>(Number of Tests Passed)</p>
                                            <p id='biggestp'><strong>4</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p id='bigp'><strong>Nesting Debts</strong></p>
                                            <p id='smallp'>(Number of Tests Passed)</p>
                                            <p id='biggestp'><strong>4</strong></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p id='bigp'><strong>System Build</strong></p>
                                            <p id='smallp'>(Number of Tests Passed)</p>
                                            <p id='biggestp' ><strong>4</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p id='bigp'><strong>Severity</strong></p>
                                            <p id='smallp'>(Number of Tests Passed)</p>
                                            <p id='biggestp' ><strong>4</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p id='bigp'><strong>Modularity</strong></p>
                                            <p id='smallp'>(Number of Tests Passed)</p>
                                            <p id='biggestp' ><strong>4</strong></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p id='bigp'><strong>Complexity</strong></p>
                                            <p id='smallp'>(Number of Tests Passed)</p>
                                            <p id='biggestp' style="color:green;" ><strong>4</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p id='bigp'><strong>Number of Commit</strong></p>
                                            <p id='smallp'>(Number of Tests Passed)</p>
                                            <p id='biggestp' style="color:rgb(241, 7, 7);"><strong>4</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@stop