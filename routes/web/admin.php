<?php

Route::group(['namespace' => 'Home\Admin'], static function () {
    Route::get('/', 'HomeController@show')->name('home');
});
