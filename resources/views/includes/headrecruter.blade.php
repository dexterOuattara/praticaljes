<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Recruiting Programmers just got easy, enjoy a smooth hiring process with our automated Tech Screening System.
    Codeln goes further than algorithmic tests,
    by offering Project-Based Assessments similar to Work Sample Tests in order to ensure
    the Applicant is the best fit for the specific work environment">
    <meta name="author" content="Codeln">

    <title>{{ config('app.name', 'Codeln') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/home.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/stay.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/TableFilter.css')}}" type="text/css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/TableFilter.js') }}" defer></script>
</head>

<body>

