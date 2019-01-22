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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('sp', 'StrategicProgramsController');

Route::resource('program', 'ProgramsController');

Route::resource('activity', 'ProgramActivitiesController');

Route::resource('actlog', 'ProgramActivityLogsController');

Route::resource('project', 'ProjectsController');

Route::resource('vendor', 'VendorsController');

Route::resource('deliverable', 'DeliverablesController');

Route::resource('wbs', 'WBSController');