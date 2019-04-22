<?php

Route::group(['prefix' => 'admin'], static function () {
    Route::get('/', 'AdminController@show');
});
