@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Case Study <span class="sr-only">(current)</span></a>
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
                <h1>Create Case Study</h1>
                <div class="col-md-4">
                    <form method="post" action="{{ route('casestudy.form') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="id_title" name="name"
                                   aria-describedby="title">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="id_description" rows="5" name="description"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="description">Challenge</label>
                            <textarea class="form-control" id="id_description" rows="5" name="challenge"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="description">Solution</label>
                            <textarea class="form-control" id="id_description" rows="5" name="solution"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="name">number Of Applicants</label>
                            <input type="text" class="form-control" id="id_title" name="numberOfApplicants"
                                   aria-describedby="title">
                        </div>

                        <div class="form-group">
                            <label for="name">number Of Meeting</label>
                            <input type="text" class="form-control" id="id_title" name="numberOfMeeting"
                                   aria-describedby="title">
                        </div>

                        <div class="form-group">
                            <label for="name">number Of Days Saves</label>
                            <input type="text" class="form-control" id="id_title" name="numberOfDaysSaves"
                                   aria-describedby="title">
                        </div>

                        <div class="form-group">
                            <label for="name">number Of Hiring</label>
                            <input type="text" class="form-control" id="id_title" name="numberOfHiring"
                                   aria-describedby="title" value="">
                        </div>

                        <div class="form-group">
                            <label for="name">Link Video</label>
                            <input type="text" class="form-control" id="id_title" name="emberVideo"
                                   aria-describedby="title" value="">
                        </div>

                        <div class="form-group">
                            <label for="name">Image</label>
                            <input type="text" class="form-control" id="id_title" name="imageCase"
                                   aria-describedby="title" value="">
                        </div>

                        <div class="form-group">
                            <label for="name">Link Ressources</label>
                            <input type="text" class="form-control" id="id_title" name="linkRessources"
                                   aria-describedby="title" value="">
                        </div>

                        <div class="form-group">
                            <label for="name">Author</label>
                            <input type="text" class="form-control" id="id_title" name="author"
                                   aria-describedby="title" value="">
                        </div>


                        <button type="submit" class="btn btn-primary">Create Study</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection