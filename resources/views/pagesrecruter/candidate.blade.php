@extends('layouts.recruter')
@section('content')

    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Create Project <small>CUSTOM YOUR FIRST ASSESSMENT </small></h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">


                            <!-- Smart Wizard -->
                            <div id="wizard" class="form_wizard wizard_horizontal">
                                <ul class="wizard_steps">
                                    <li>
                                        <a href="#step-1">
                                            <span class="step_no">1</span>
                                            <span class="step_descr">
                                              Step 1<br />
                                              <small>CHOOSE ASSESSMENT</small>
                                          </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-2">
                                            <span class="step_no">2</span>
                                            <span class="step_descr">
                                              Step 2<br />
                                              <small>FRAMEWORK / LANGUAGE</small>
                                          </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-3">
                                            <span class="step_no">3</span>
                                            <span class="step_descr">
                                              Step 3<br />
                                              <small>REQUIREMENT PROJECT</small>
                                          </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-4">
                                            <span class="step_no">4</span>
                                            <span class="step_descr">
                                              Step 4<br />
                                              <small>CANDIDATE</small>
                                          </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-5">
                                            <span class="step_no">5</span>
                                            <span class="step_descr">
                                              Step 5<br />
                                              <small>SEND INVITATION</small>
                                          </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-6">
                                            <span class="step_no">6</span>
                                            <span class="step_descr">
                                              Step 6<br />
                                              <small>PAYMENT</small>
                                          </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End SmartWizard Content -->

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--    <div class="col-md-12 col-sm-12 col-xs-12" style="height: 350px">-->
                <!--        <div class="x_panel">-->
                <!--            <div class="x_title">-->
                <!--                <h2>Choose your plan</h2>-->
                <!---->
                <!--                <div class="clearfix"></div>-->
                <!--            </div>-->
                <!--            <div class="x_content">-->
                <!--    <div class="range-holder">-->
                <!---->
                <!--        <div id="pr-slider" class="dragdealer">-->
                <!--            <div class="stripe">-->
                <!---->
                <!--                <div id="green-highlight"></div>-->
                <!--                <div id="orange-highlight"></div>-->
                <!--                <div id="blue-highlight"></div>-->
                <!---->
                <!--                <div class="handle">-->
                <!--                    <div class="infobox">-->
                <!--                        <div class="titlebar"><span id="plan-holder"></span> <span id="device-holder"></span></div>-->
                <!--                        <div class="innerbox">-->
                <!---->
                <!--                            <div class="info-price"></div>-->
                <!---->
                <!---->
                <!---->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="square">-->
                <!--                        <span class="value"></span>-->
                <!--                        <span class="menu-line"></span>-->
                <!--                        <span class="menu-line"></span>-->
                <!--                        <span class="menu-line"></span>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!---->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->



            </div>
            <div class="row">

                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Do you have your own candidates ?</div>
                        <div class="x_panel">
                            <div class="x_content">
                                <p class="text-muted font-13 m-b-30">
                                    Please follow this example : First Name, Last Name, Email
                                </p>
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                    </tr>
                                    </thead>


                                    <tbody>

                                    <tr>
                                        <td>Garrett </td>
                                        <td>Winters</td>
                                        <td>Garrett@yahoo.com</td>

                                    </tr>


                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('import_parse') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('csv_file') ? ' has-error' : '' }}">
                                    <label for="csv_file" class="col-md-4 control-label">CSV file to import</label>

                                    <div class="col-md-6">
                                        <input id="csv_file" type="file" class="form-control" name="csv_file" required>

                                        @if ($errors->has('csv_file'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('csv_file') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="header" checked> File contains header row?
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Parse CSV
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-sm-5 col-xs-12">
                    <h3>Open at all Codeln candidate </h3>
                    <div class="form-group">


                        <div class="col-md-9 col-sm-9 col-xs-12">

                            <div class="radio">
                                <label>
                                    <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> Codeln match for you the most right candidate
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="/invitation">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-danger">Save & Next</button>
                    </div>
                </a>
                <br>
            </div>
        </div>
@stop