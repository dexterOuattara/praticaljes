@extends('layouts.default')
@section('content')
<!-- Screenshots -->
<section id="screenshots" class="section" style="padding-top: 120px">
    <div class="container">

        <div class="row">
            <h3>The most popular language in 2018</h3>
            <div class="col-md-4">
                <div class="vertical_box">
                    <img class="img-responsive" src="{{asset('images/ressources/most-popular-language-edition-2018.jpg')}}" alt="">
                </div>
            </div>

            <div class="col-md-5">
                <div class="vertical_box">

                    <form>
                        <div class="form-group">
                            <label for="exampleInputName">Complete Name</label>
                            <input type="text" class="form-control" id="exampleInputName" placeholder="John Doe">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="currentposition">Current Position</label>
                            <select class="form-control">
                                <option>CEO</option>
                                <option>CTO</option>
                                <option>RECRUTER</option>
                                <option>DEVELOPPER</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Compagny</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Mtn">
                        </div>
                        <button type="submit" class="btn btn-default">Download it</button>
                    </form>
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