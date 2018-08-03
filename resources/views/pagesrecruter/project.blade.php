@extends('layouts.recruter')
@section('content')
    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>

            <div class="row">

            </div>


        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Score candidate</h2>
                        <div class="btn-group" role="group" aria-label="Basic example" style="float:right">
                            <button type="button" class="btn btn-danger">Evaluation in Progress</button>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <!-- start project list -->
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th>RANK</th>
                                <th>PICTURE</th>
                                <th>NAME</th>
                                <th>SCORE</th>
                                <th>PROFFICENCY</th>
                                <th>DEMO</th>
                                <th>FULL REPORT</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <ul class="list-inline">
                                        <li>
                                            <img src="images2/user/55.jpg" class="avatar" alt="Avatar">
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <a href="/profile" target="_blank"> Olivia Galagher</a>
                                </td>

                                <td>
                                    60% Complete
                                </td>

                                <td>
                                    Good
                                </td>

                                <td>
                                    <a href="https://cryptoprize.herokuapp.com/" target="_blank">
                                    <buttom class="btn btn-primary">Live Demo</buttom>
                                    </a>
                                </td>
                                <td>
                                    {{--<a href="/overview">--}}
                                    {{--<buttom class="btn btn-success">Full report</buttom>--}}
                                    {{--</a>--}}
                                    <a href="https://gazelle.ihe.net/sonar/dashboard?id=net.ihe.gazelle.proxy%3Agazelle-proxy" target="_blank">
                                        <buttom class="btn btn-success">Full report</buttom>
                                    </a>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        <!-- end project list -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop