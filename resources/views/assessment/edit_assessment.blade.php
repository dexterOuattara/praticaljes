@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Post <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nav item again</a>
                    </li>
                </ul>
            </nav>

            <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                <h1>Edit Post</h1>
                    <form method="post" action="">
                        <div class="col-md-6">

                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name project</label>
                            <input type="text" class="form-control" id="id_title" name="name"
                                   aria-describedby="name" value="{{ $assessment->name }}">
                        </div>
                            <div class="form-group">
                                <label for="level">Level</label>
                                <input type="text" class="form-control" id="id_title" name="level"
                                       aria-describedby="level" value="{{ $assessment->level }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Type Assessment</label>
                                <select name="name" class="form-control">

                                @foreach($typeassessments as $typeassessment)
                                    <option value="{{$typeassessment->id}}">{{$typeassessment->name}}</option>
                                @endforeach
                                    </select>
                            </div>
                        <div class="form-group">
                            <label for="name">Requirement 1</label>
                            <textarea class="form-control" id="id_description" rows="5" name="requirement1">{{ $assessment->requirement1 }}</textarea>


                        </div>
                        <div class="form-group">
                            <label for="name">Requirement 2</label>
                            <textarea class="form-control" id="id_description" rows="5" name="requirement2">{{ $assessment->requirement2 }}</textarea>

                        </div>
                        <div class="form-group">
                            <label for="name">Requirement 3</label>
                            <textarea class="form-control" id="id_description" rows="5" name="requirement3">{{ $assessment->requirement3 }}</textarea>

                        </div>
                        <div class="form-group">
                            <label for="name">Requirement 4</label>
                            <textarea class="form-control" id="id_description" rows="5" name="requirement4">{{ $assessment->requirement4 }}</textarea>

                        </div>
                        <div class="form-group">
                            <label for="name">Requirement 5</label>
                            <textarea class="form-control" id="id_description" rows="5" name="requirement5">{{ $assessment->requirement5 }}</textarea>

                        </div>
                        <div class="form-group">
                            <label for="name">Requirement 6</label>
                            <textarea class="form-control" id="id_description" rows="5" name="requirement6">{{ $assessment->requirement6 }}</textarea>

                        </div>
                        <div class="form-group">
                            <label for="name">Requirement 7</label>
                            <textarea class="form-control" id="id_description" rows="5" name="requirement7">{{ $assessment->requirement7 }}</textarea>

                        </div>
                        <div class="form-group">
                            <label for="name">Requirement 8</label>
                            <textarea class="form-control" id="id_description" rows="5" name="requirement8">{{ $assessment->requirement8 }}</textarea>

                        </div>
                        <div class="form-group">
                            <label for="name">Requirement 9</label>
                            <textarea class="form-control" id="id_description" rows="5" name="requirement9">{{ $assessment->requirement9 }}</textarea>

                        </div>
                        <div class="form-group">
                            <label for="name">Requirement 10</label>

                            <textarea class="form-control" id="id_description" rows="5" name="requirement10">{{ $assessment->requirement10 }}</textarea>

                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="id_description" rows="5" name="description">{{ $assessment->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">update Assessment</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection