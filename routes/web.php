<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 
    array(
        'as' => 'home',
        'uses' => 'PagesController@home'
    )
);

Route::get('/projects', 
    array(
        'as' => 'projects',
        'uses' => 'ProjectsController@index'
    )
);

Route::group(array('prefix' => 'projects'), function()
{
    Route::get('/projects/{project}',
        array(
            'as' => 'project',
            'uses' => 'ProjectsController@single'
        )
    );
});