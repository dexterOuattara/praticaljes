@extends('layouts.default')
@section('content')
<!-- Screenshots -->
<section id="screenshots" class="section" style="padding-top: 120px">
    <div class="container">

        <div class="row">
            <div class="col-md-9">
                <div class="vertical_box">
                    <a href="/articledetail">
                        <img class="img-responsive" src="{{asset('images/app_bg_screenshot.png')}}" height="1920" width="900" alt="">
                        <div class="row">
                            <div class="col-md-2">
                                <p style="font-size: 14px">Dexter Ouattara <br> 22/06/2018</p>
                            </div>
                            <div class="col-md-10">
                                <h5>Do you know how hired your great developper ?</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="vertical_box">
                    <a href="/articledetail">
                        <img class="img-responsive" src="{{asset('images/app_bg_screenshot.png')}}" height="1920" width="900" alt="">
                        <div class="row">
                            <div class="col-md-2">
                                <p style="font-size: 14px">Dexter Ouattara <br> 22/06/2018</p>
                            </div>
                            <div class="col-md-10">
                                <h5>Do you know how hired your great developper ?</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="vertical_box">
                    <a href="/articledetail">
                        <img class="img-responsive" src="{{asset('images/app_bg_screenshot.png')}}" height="1920" width="900" alt="">
                        <div class="row">
                            <div class="col-md-2">
                                <p style="font-size: 14px">Dexter Ouattara <br> 22/06/2018</p>
                            </div>
                            <div class="col-md-10">
                                <h5>Do you know how hired your great developper ?</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="vertical_box">
                    <a href="/articledetail">
                        <img class="img-responsive" src="{{asset('images/app_bg_screenshot.png')}}" height="1920" width="900" alt="">
                        <div class="row">
                            <div class="col-md-2">
                                <p style="font-size: 14px">Dexter Ouattara <br> 22/06/2018</p>
                            </div>
                            <div class="col-md-10">
                                <h5>Do you know how hired your great developper ?</h5>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-md-3 text-center">
                <h4>Ressource</h4>
                <a href="/ressourcesdetails">
                    <div class="col-md-12">
                        <div class="thumbnail">
                            <img src="{{asset('images/case-studie/mest.png')}}" alt="mest" style="height: 200px">
                            <div class="caption">
                                <!--                        <h3>Thumbnail label</h3>-->
                                <p class="text-center">MEST</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/ressourcesdetails">
                    <div class="col-md-12">
                        <div class="thumbnail">
                            <img src="{{asset('images/case-studie/mtn.png')}}" alt="mtn" style="height: 200px">
                            <div class="caption">
                                <!--                        <h3>Thumbnail label</h3>-->
                                <p class="text-center">MTN</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/ressourcesdetails">
                    <div class="col-md-12">
                        <div class="thumbnail">
                            <img src="{{asset('images/case-studie/ruxster.png')}}" alt="ruxster" style="height: 200px">
                            <div class="caption">
                                <!--                        <h3>Thumbnail label</h3>-->
                                <p class="text-center">RUXSTER</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row">

            </div>
        </div>
</section>
<!-- /Screenshots -->



@stop