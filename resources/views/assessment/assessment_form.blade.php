@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Assessment <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('post.form') }}">Create Post</a>
                    </li>
                </ul>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('casestudy.form') }}">Create Case Study</a>
                    </li>
                </ul>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.case') }}">List Case Study</a>
                    </li>
                </ul>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.user') }}">List User</a>
                    </li>
                </ul>
            </nav>

            <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                <h1>Create Assessment</h1>
                <div class="col-md-4">
                    <form method="post" action="{{ route('assessment.form') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name project</label>
                            <input type="text" class="form-control" id="id_title" name="name"
                                   aria-describedby="name">
                        </div>

                        <div class="form-group">
                            <label for="category_id">Type Assessment</label>
                            <div class="col-md-6">
                                <select name="name" class="form-control">

                                    @foreach($typeassessments as $typeassessment)
                                        <option value="{{$typeassessment->id}}">{{$typeassessment->name}}</option>
                                    @endforeach
                                </select>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name">Name project</label>
                            <input type="text" class="form-control" id="id_title" name="name"
                                   aria-describedby="name">
                        </div>
                        <div class="form-group">
                            <label for="name">Image 1</label>
                            <input type="file" class="form-control" id="id_title" name="name"
                                   aria-describedby="image1">
                        </div>
                        <div class="form-group">
                            <label for="name">Image 2</label>
                            <input type="file" class="form-control" id="id_title" name="name"
                                   aria-describedby="image2">
                        </div>
                        <div class="form-group">
                            <label for="name">Image 3</label>
                            <input type="file" class="form-control" id="id_title" name="name"
                                   aria-describedby="image3">
                        </div>
                        <div class="form-group">
                            <label for="name">Image 4</label>
                            <input type="file" class="form-control" id="id_title" name="name"
                                   aria-describedby="image4">
                        </div>
                        <div class="form-group">
                            <label for="name">Image 5</label>
                            <input type="file" class="form-control" id="id_title" name="name"
                                   aria-describedby="image5">
                        </div>
                        <div class="form-group">
                            <label for="name">Image 6</label>
                            <input type="file" class="form-control" id="id_title" name="name"
                                   aria-describedby="image6">
                        </div>
                        <div class="form-group">
                            <label for="name">Requirement 1</label>
                            <textarea class="form-control" id="id_description" rows="5" name="requirement1"></textarea>


                        </div>
                        <div class="form-group">
                            <label for="name">Requirement 2</label>
                            <textarea class="form-control" id="id_description" rows="5" name="requirement2"></textarea>

                        </div>
                        <div class="form-group">
                            <label for="name">Requirement 3</label>
                            <textarea class="form-control" id="id_description" rows="5" name="requirement3"></textarea>

                        </div>
                        <div class="form-group">
                            <label for="name">Requirement 4</label>
                            <textarea class="form-control" id="id_description" rows="5" name="requirement4"></textarea>

                        </div>
                        <div class="form-group">
                            <label for="name">Requirement 5</label>
                            <textarea class="form-control" id="id_description" rows="5" name="requirement5"></textarea>

                        </div>
                        <div class="form-group">
                            <label for="name">Requirement 6</label>
                            <textarea class="form-control" id="id_description" rows="5" name="requirement6"></textarea>

                        </div>
                        <div class="form-group">
                            <label for="name">Requirement 7</label>
                            <textarea class="form-control" id="id_description" rows="5" name="requirement7"></textarea>

                        </div>
                        <div class="form-group">
                            <label for="name">Requirement 8</label>
                            <textarea class="form-control" id="id_description" rows="5" name="requirement8"></textarea>

                        </div>
                        <div class="form-group">
                            <label for="name">Requirement 9</label>
                            <textarea class="form-control" id="id_description" rows="5" name="requirement9"></textarea>

                        </div>
                        <div class="form-group">
                            <label for="name">Requirement 10</label>

                            <textarea class="form-control" id="id_description" rows="5" name="requirement10"></textarea>

                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="id_description" rows="5" name="description"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id_title" name="author" value="{{ Auth::user()->author }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Create Assessment</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection