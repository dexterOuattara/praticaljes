@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-3">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Post <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                </ul>
            </nav>

            <div class="col-sm-6">
                <h1>{{ $casestadie->name }} {{ $casestadie->author }}</h1>
                <iframe width="320" height="320" src="{{ $casestadie->emberVideo }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                <p> <strong>Image</strong>  :{{ $casestadie->imageCase }}</p>
                    <p><strong>Challenge</strong> :{{ $casestadie->challenge }}</p>
                    <p><strong>Solution</strong> :{{ $casestadie->solution }}</p>

                <a href="{{ route('casestudy.edit', ['id' => $casestadie->id]) }}">
                        <button type="button" class="btn btn-primary btn-sm">Edit Case Study</button>
                    </a>
                    <a href="{{ route('casestudy.delete', ['id' => $casestadie->id]) }}">
                        <button type="button" class="btn btn-danger btn-sm">Delete Case Study</button>
                    </a>
            </div>
            <div class="col-sm-3">
                <h1>Statistique</h1>

                <p><strong>Number Of Applicant</strong> :{{ $casestadie->numberOfApplicants }}</p>
                <p><strong>Number Of Meeting</strong> :{{ $casestadie->numberOfMeeting }}</p>
                <p><strong>Number Of days Saves</strong> :{{ $casestadie->numberOfDaysSaves }}</p>
                <p><strong>Number Of Hiring</strong> :{{ $casestadie->numberOfHiring }}</p>
            </div>
        </div>
    </div>
@endsection