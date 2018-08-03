@extends('layouts.default')
@section('content')
<!-- Screenshots -->
<section id="screenshots" class="section" style="padding-top: 120px">
    <div class="container">

        <div class="row">
            <div class="col-md-9">
                <div class="vertical_box">

                    <img class="img-responsive" src="../images/article/contact.jpg" alt="{{ $post->imgPost }}">
                    <div class="row">
                        <div class="col-md-2">
                            <p class="blog-post-meta"><small><i>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }} by <a href="#">{{ $post->author }}</a></i></small></p>
                        </div>
                        <div class="col-md-10">
                            <h5>{{ $post->title }}</h5>
                        </div>
                    </div>
                    <blockquote>{{ $post->description }}</blockquote>

                </div>
                <div class="vertical_box">

                </div>
            </div>
            <div class="col-md-3 text-center">
                <h4>Ressources</h4>
                <a href="/ressourcesdetails">
                    <div class="col-md-12">
                        <div class="thumbnail">
                            <img src="{{asset('images/ressources/most-popular-language-edition-2018.jpg')}}" alt="how-hire-developper" style="height: 200px">
                            <div class="caption">
                                <!--                        <h3>Thumbnail label</h3>-->
                                <p class="text-center">Most popular language 2018</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/ressourcesdetails">
                    <div class="col-md-12">
                        <div class="thumbnail">
                            <img src="{{asset('images/ressources/progressive-web-app-the-battle.jpg')}}" alt="progressive-web-app-the-battle" style="height: 200px">
                            <div class="caption">
                                <!--                        <h3>Thumbnail label</h3>-->
                                <p class="text-center">Progressive web app the battle</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/ressourcesdetails">
                    <div class="col-md-12">
                        <div class="thumbnail">
                            <img src="{{asset('/images/case-studie/ruxster.png')}}" alt="ruxster" style="height: 200px">
                            <div class="caption">
                                <!--                        <h3>Thumbnail label</h3>-->
                                <p class="text-center">RUXSTER</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</section>
<!-- /Screenshots -->
@stop


