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
                <h1>Edit Case Study</h1>
                <div class="col-md-6">
                    <form method="post" action="">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="id_title" name="name"
                                   aria-describedby="title" value="{{ $casestadie->name }}">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="id_description" rows="5" name="description">{{ $casestadie->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="description">Challenge</label>
                            <textarea class="form-control" id="id_description" rows="5" name="challenge">{{ $casestadie->challenge }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="description">Solution</label>
                            <textarea class="form-control" id="id_description" rows="5" name="solution">{{ $casestadie->solution }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="name">number Of Applicants</label>
                            <input type="text" class="form-control" id="id_title" name="numberOfApplicants"
                                   aria-describedby="title"  value="{{ $casestadie->numberOfApplicants }}">
                        </div>

                        <div class="form-group">
                            <label for="name">number Of Meeting</label>
                            <input type="text" class="form-control" id="id_title" name="numberOfMeeting"
                                   aria-describedby="title" value="{{ $casestadie->numberOfMeeting }}">
                        </div>

                        <div class="form-group">
                            <label for="name">number Of Days Saves</label>
                            <input type="text" class="form-control" id="id_title" name="numberOfDaysSaves"
                                   aria-describedby="title" value="{{ $casestadie->numberOfDaysSaves }}">
                        </div>

                        <div class="form-group">
                            <label for="name">Link Video</label>
                            <input type="text" class="form-control" id="id_title" name="emberVideo"
                                   aria-describedby="title" value="{{ $casestadie->emberVideo }}">
                        </div>

                        <div class="form-group">
                            <label for="name">Image</label>
                            <input type="text" class="form-control" id="id_title" name="imageCase"
                                   aria-describedby="title" value="{{ $casestadie->imageCase }}">
                        </div>

                        <div class="form-group">
                            <label for="name">Link Ressources</label>
                            <input type="text" class="form-control" id="id_title" name="linkRessources"
                                   aria-describedby="title" value="{{ $casestadie->linkRessources }}">
                        </div>

                        <div class="form-group">
                            <label for="name">Author</label>
                            <input type="text" class="form-control" id="id_title" name="author"
                                   aria-describedby="title" value="{{ $casestadie->author }}">
                        </div>

                        <div class="form-group">
                            <label for="name">number Of Hiring</label>
                            <input type="text" class="form-control" id="id_title" name="numberOfHiring"
                                   aria-describedby="title" value="{{ $casestadie->numberOfHiring }}">
                        </div>
                        <button type="submit" class="btn btn-primary">update Case Study</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection