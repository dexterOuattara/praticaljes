@extends('layouts.app')
@section('title')
    Welcome Laravel Blog Tutorial
@endsection

@section('content')
    <main role="main" class="container"  style="margin-top: 5px">

        <div class="row">

            <div class="col-sm-8 blog-main">

                @foreach($assessments as $assessment)
                    <div class="blog-post">
                        <h2 class="blog-post-title">{{ $assessment->name }}</h2>
                        <p class="blog-post-meta"><small><i>{{ Carbon\Carbon::parse($assessment->created_at)->format('d-m-Y')  }} by <a href="#">{{ $assessment->name }}</a></i></small></p>

                        <p>{!! \Illuminate\Support\Str::words($assessment->description, 30, '...') !!}</p>
                        <blockquote>
                            <p>
                                {{--<a href="{{ route('post.read', ['post_id' => $post->id]) }}" class="btn btn-primary btn-sm">Learn more</a> </p>--}}
                        </blockquote>
                    </div><!-- /.blog-post -->
                @endforeach

                <nav class="blog-pagination">
                    {{ $assessment->links() }}
                </nav>

            </div><!-- /.blog-main -->

            <aside class="col-sm-3 ml-sm-auto blog-sidebar">
                <div class="sidebar-module">
                    <h4>Latest Posts</h4>
                    <ol class="list-unstyled">
                        <li><a href="">March 17</a></li>
                        <li><a href="">March 17</a></li>
                    </ol>
                </div>
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main><!-- /.container -->
@endsection