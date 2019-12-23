<?php
Route::middleware('auth')->name('back.')->group(function(){
    Route::get('dashboard', Back\Dashboard::class)->name('dashboard');
});
