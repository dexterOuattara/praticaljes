@extends('layouts.recruter')
@section('content')
    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Create Project <small>CUSTOMIZE YOUR FIRST ASSESSMENT </small></h2>

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

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Send Invitation <small>Last step</small></h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form id="demo-form2" action="/payment" data-parsley-validate class="form-horizontal form-label-left">

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Assessment Date <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="date" id="first-name" name="DateAssessment" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Assessment End <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="date" id="first-name" name="DateAssessment" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>



                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" class="btn btn-success">Send assessment</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@stop