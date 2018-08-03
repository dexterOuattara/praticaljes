@extends('layouts.default')
@section('content')
<!-- Screenshots -->
<section id="screenshots" class="section" style="padding-top: 120px">
    <div class="container">

        <div class="row">
            <div class="col-md-9">
                <div class="vertical_box">
                    <iframe width="940" height="415" src="https://www.youtube.com/embed/5lGbU-dYNPs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    <h4>Do you know how hired your great developper ?</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deserunt doloremque ex incidunt laboriosam laudantium magni nisi nulla soluta, tempore tenetur ullam. Molestias officia pariatur qui quibusdam ratione rerum sed!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto assumenda consequuntur culpa ducimus eaque eligendi facere impedit, in ipsam iste, nemo obcaecati optio quaerat quas, quis sapiente vitae voluptatibus?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid corporis dolor hic impedit molestiae officia quis tempora. Error illum labore nam quaerat suscipit. Adipisci commodi deleniti dolores explicabo maiores, nihil.
                    </p>

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
            <div class="row">

            </div>
        </div>
</section>
<!-- /Screenshots -->

@stop

