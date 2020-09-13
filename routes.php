<?php

Route::view('links/admin', 'links.admin');
Route::get('/{shortcode:[-\w]*}', 'LinkController@go')->name('links.go');

Route::get(, function($shortcode) use ($app) {
    $target = $app['db']->table('links')->where('key', $key)->pluck('target');
    if ($target) {
        return redirect($target);
    }
    return redirect(getenv('APP_DEFAULT_URL'));
});)