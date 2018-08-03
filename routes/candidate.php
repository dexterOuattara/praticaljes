<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('candidate')->user();


    return view('candidate.home');
})->name('home');

