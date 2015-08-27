<?php
Route::group(array('module'=>'Admin','namespace' => 'App\Modules\Admin\Controllers'), function() {


    Route::get('admin', 'AdminsController@index');

    Route::resource('admin/categories','CategoriesController');
    Route::resource('admin/courses','CoursesController');
    Route::resource('admin/users','UsersController');



});