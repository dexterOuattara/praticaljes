@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 100px;">

    <div class="row">
        <div class="col-md-4 text-center" style="background-color: navy;height: 100px;padding-top: 40px;font-size:24px">
            <a style="color: white" href="{{ route('admin.dashboard') }}">Manage all Post</a>
        </div>
        <div class="col-md-4 text-center" style="background-color: navy;height: 100px;padding-top: 40px;font-size:24px">
            <a style="color: white" href="{{ route('admin.case') }}">Manage all Case</a>

        </div>
        <div class="col-md-4 text-center" style="background-color: navy;height: 100px;padding-top: 40px;font-size:24px">
            <a style="color: white" href="{{ route('admin.user') }}">Manage all User</a>

        </div>
    </div>

    <div class="row">
        <div class="col-md-4 text-center" style="background-color: navy;height: 100px;padding-top: 40px;font-size:24px">
            <a style="color: white" href="{{ route('admin.assessment') }}">Manage all Assessment</a>

        </div>
        <div class="col-md-4 text-center" style="background-color: navy;height: 100px;padding-top: 40px;font-size:24px">
            <a style="color: white" href="{{ route('admin.typeassess') }}">Manage all Type Assessment</a>

        </div>
        <div class="col-md-4 text-center" style="background-color: navy;height: 100px;padding-top: 40px;font-size:24px">
            <a style="color: white" href="{{ route('admin.category') }}">Manage all Category</a>

        </div>
    </div>
</div>
@endsection
