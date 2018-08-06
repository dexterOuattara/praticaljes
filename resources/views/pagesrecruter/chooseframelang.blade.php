@extends('layouts.recruter')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom fley">
        <div class="navbar fixed-top fine">
            <h5>Project library</h5>
            <nav>
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @else
                    <li style="list-style-type: none;float: right;">
                        <img src="/storage/avatars/{{ Auth::user()->avatar }}" width="30" height="30" alt="">
                    </li>
                    <li class="nav-item dropdown" style="list-style-type: none;float: right;">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->last_name }} {{ Auth::user()->name }}  <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                    </ul>

            </nav>
        </div>
    </div>

    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Name project :{{$assessment->name}} <small style="font-size: 18px">CUSTOM YOUR FIRST ASSESSMENT </small></h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-primary">CATEGORY : {{$assessment->typeassessment->name}}</button>
                                <button type="button" class="btn btn-danger">LEVEL : {{$assessment->level}}</button>
                                <button type="button" class="btn btn-default">TIME : {{$assessment->timeassessment}} MN</button>
                                {{--<button type="button" class="btn btn-default">PRICE : {{$assessment->price}}</button>--}}
                            </div>

                            <div class="clearfix"></div>
                            <img class="img-responsive" src="../images2/project/{{$assessment->image1}}" width="600px" alt="{{$assessment->image1}}" />

                        </div>

                    </div>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Customize Assessment</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                                <form class="form-horizontal form-label-left "method="post" action="{{ route('chooseframelang.form') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label for="category_id">PROGRAMMING LANGUAGE</label>
                                        <select class="form-control" name="proglanguage">
                                            @foreach($skills->where('tag', 'backend') as $skill)
                                                <option value="{{$skill->name}}">{{$skill->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="category_id">LANGUAGE FRAMEWORK</label>
                                        <select class="form-control" name="framelanguage">
                                            @foreach($skills->where('tag', 'framework') as $skill)
                                                <option value="{{$skill->name}}">{{$skill->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="category_id">VERSION HTML</label>
                                            <select name="framehtml" class="form-control">
                                                @foreach($skills->where('tag', 'HTML') as $skill)
                                                    <option value="{{$skill->name}}">{{$skill->name}}</option>
                                                @endforeach
                                            </select>
                                            </select>
                                    </div>
                                <div class="form-group">
                                    <label for="category_id">VERSION CSS</label>
                                    <select class="form-control" name="framecss">
                                        @foreach($skills->where('tag', 'frontend') as $skill)
                                            <option value="{{$skill->name}}">{{$skill->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                    <div class="form-group">
                                        <label for="dateassessment"> ASSESSMENT DATE <span class="required">*</span>
                                        </label>
                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            <input type="date" id="DateAssessment" name="dateassessment" class="form-control col-md-7 col-xs-12" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="EndAssessment"> ASSESSMENT END <span class="required">*</span>
                                        </label>
                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            <input type="date" id="EndAssessment" name="endassessment" class="form-control col-md-7 col-xs-12" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-8 col-sm-8 col-xs-12" for="numberapplicant"> Number Candidate <span class="required">*</span>
                                        </label>
                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            <input type="int"  class="form-control col-md-7 col-xs-12" id="numberapplicant" name="numberapplicant" required >
                                        </div>
                                    </div>

                                        <input type="hidden" class="form-control" id="assessment_id" name="user_id"
                                               value="{{ Auth::user()->id }}" readonly>

                                        <input type="hidden" class="form-control" id="timeassessment" name="timeassessment"
                                               value="{{$assessment->timeassessment}}" readonly>

                                        <input type="hidden" class="form-control" id="assessment_id" name="assessment_id"
                                               value="{{$assessment->id}}" readonly>

                                        <input type="hidden" class="form-control" id="description" name="description"
                                               value="{{$assessment->description}}" readonly>

                                        <input type="hidden" class="form-control" id="image1" name="image1"
                                               value="{{$assessment->image1}}" readonly>

                                        <input type="hidden" class="form-control" id="requirement1" name="requirement1"
                                               value="{{$assessment->requirement1}}" readonly>

                                        <input type="hidden" class="form-control" id="level" name="level"
                                               value="{{$assessment->level}}" readonly>


                                        <input type="hidden" class="form-control" id="name" name="name"
                                               value="{{$assessment->name}}" readonly>

                                        <input type="hidden" class="form-control" id="name" name="price"
                                               value="{{$assessment->price}}" readonly>

                                        <input type="hidden" class="form-control" id="typeassessment" name="typeassessment"
                                               value="{{$assessment->typeassessment->name}}" readonly>


                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" class="btn btn-success">Save & Next</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div>
                        <h3>Description</h3>
                        <blockquote class="blockquote text-left macouleur">
                            {!! $assessment->description !!}
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-6">
                    <blockquote>
                        <h3>Requirement</h3>
                        <blockquote class="blockquote text-left macouleur">
                            {!! $assessment->requirement1 !!}
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
@stop