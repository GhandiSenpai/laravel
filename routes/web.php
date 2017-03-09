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

Route::get('user51/1', function()
{
    return response()->json([
         'userid' => '1',
         'name' => 'Simon',
         'country' => 'Austria'
        ]);

});

Route::get('user54/1', function()
{
    return response()->json([
         'userid' => '1',
         'firstname' => 'Simon',
         'country' => 'Austria'
        ]);
});

