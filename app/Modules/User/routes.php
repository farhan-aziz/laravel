<?php
Route::group(array('module'=>'User','namespace' => 'App\Modules\User\Controllers'), function() {

    Route::get('user', 'UsersController@index');
    Route::get('user/profile', 'UsersController@profile');
    Route::post('user/update/', 'UsersController@update');
    Route::get('user/change/password/', 'UsersController@changePassword');
    Route::post('user/update/password/', 'UsersController@updatePassword');


    Route::get('course/{id}/{slug?}', 'CoursesController@show');
    Route::get('checkout/{id}/{slug?}', 'CoursesController@getCheckout');

});