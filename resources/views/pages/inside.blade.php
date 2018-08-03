@extends('layouts.default')
@section('content')
<!-- Screenshots -->
<section id="screenshots" class="section" style="padding-top: 120px">
    <div class="container">

        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <a href="/article"><h4>Article</h4></a>

                    @foreach($insides as $inside)

                    <a href="/articledetail">
                        <div class="col-md-4">
                            <a href="{{ route('pages.articledetail', ['id' => $inside->id]) }}">
                                <img class="img-responsive" src="images/article/contact.jpg" alt="ruxster">
                            </a>

                            <div class="caption">
                                <h6 class="text-left">{!! \Illuminate\Support\Str::words($inside->title, 3) !!}</h6>
                                <p class="blog-post-meta"><small><i>{{ Carbon\Carbon::parse($inside->created_at)->format('d-m-Y')  }} by <a href="#">{{ $inside->name }}</a></i></small></p>

                                <p class="text-left">{!! \Illuminate\Support\Str::words($inside->description, 15, '...') !!}</p>

                            </div>
                        </div>
                    </a>
                    @endforeach

                </div>
                <div class="row">
                    <a href="/video"><h4>Video</h4></a>
                    @foreach($insides as $inside)

                    <a href="/videodetail">
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <img src="{{asset('images/logo/mest.png')}}" alt="mest" style="height: 150px">
                                <div class="caption">
                                    <h6 class="text-left">Do you know how hired your great developper ?</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach

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
            <div class="row">

            </div>
        </div>
</section>
<!-- /Screenshots -->

@stop

