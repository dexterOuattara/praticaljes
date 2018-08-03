@extends('layouts.default')
@section('content')
    <!-- Screenshots -->
    <section id="screenshots" class="section" style="padding-top: 120px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div id="exTab2" class="container">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a  href="#loginentreprice" data-toggle="tab">I am Recruter</a>
                            </li>
                            <li>
                                <a href="#logindeveloper" data-toggle="tab">I am Developer</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="loginentreprice">
                                <br>
                                <form class="form-horizontal" action="/dashboard">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="email">Email:</label>
                                        <div class="col-sm-3">
                                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Password:</label>
                                        <div class="col-sm-3">
                                            <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-2">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Remember me</label>
                                            </div>
                                            <div class="checkbox">
                                                <a  href="#signupentreprice" data-toggle="tab">I don't have Account</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-2">
                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="signupentreprice">
                                <br>
                                <form class="form-horizontal" action="/calltoapply">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="email">First Name *:</label>
                                        <div class="col-sm-3">
                                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="email">Last Name *:</label>
                                        <div class="col-sm-3">
                                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Work Email *:</label>
                                        <div class="col-sm-3">
                                            <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Job Title *:</label>
                                        <div class="col-sm-3">
                                            <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Password *:</label>
                                        <div class="col-sm-3">
                                            <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Repeat Password *:</label>
                                        <div class="col-sm-3">
                                            <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-2">
                                            <div class="checkbox">
                                                <a  href="#loginentreprice" data-toggle="tab">I have a Account</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-2">
                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="logindeveloper">
                                <br>
                                <form class="form-horizontal" action="/calltoapply">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="email">Email:</label>
                                        <div class="col-sm-3">
                                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Password:</label>
                                        <div class="col-sm-3">
                                            <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-2">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Remember me</label>
                                            </div>
                                            <div class="checkbox">
                                                <a  href="#signupdeveloper" data-toggle="tab">I don't have Account</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-2">
                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane" id="signupdeveloper">
                                <br>
                                <form class="form-horizontal" action="/action_page.php">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="email">First Name *:</label>
                                        <div class="col-sm-3">
                                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="email">Last Name *:</label>
                                        <div class="col-sm-3">
                                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Email *:</label>
                                        <div class="col-sm-3">
                                            <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Password *:</label>
                                        <div class="col-sm-3">
                                            <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Repeat Password *:</label>
                                        <div class="col-sm-3">
                                            <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-2">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Remember me</label>
                                            </div>
                                            <div class="checkbox">
                                                <a  href="#logindeveloper" data-toggle="tab">I don't have Account</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-2">
                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@stop

