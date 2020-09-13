<?php
Route::group(['middleware' => 'auth'], function () {
    Route::resource('link', 'LinkController');
});
