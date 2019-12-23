<?php

Route::view('signin', 'auth.signin')->name('auth.signin');
Route::post('signin', Auth\SignIn::class)->name('auth.signin');

Route::view('signup', 'auth.signup')->name('auth.signup');
Route::post('signup', Auth\SignUp::class)->name('auth.signup');

Route::view('forgotten', 'auth.forgotten')->name('auth.forgotten');

Route::post('signout', Auth\SignOut::class)->name('auth.signout')->middleware('auth');
