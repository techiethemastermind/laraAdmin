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

Route::get('/', 'HomeController@index');

Auth::routes();

// Super Admin
Route::group([
    'middleware' => ['auth','chksuperadmin'],
    'prefix' => 's0'
], function($router) {

    // Home
    Route::get('/', 'SuperAdminController@index');
    // Accounts
    Route::get('/accounts', 'SuperAdmin\AccountsController@index');
    Route::get('/accounts/{action}/{id}', 'SuperAdmin\AccountsController@action');
    Route::post('/accounts/{action}/{id}', 'SuperAdmin\AccountsController@action');
    // Profile
    Route::get('/profile', 'SuperAdmin\ProfileController@index');
    Route::post('/profile/save', 'SuperAdmin\ProfileController@update');
});

// General Admin
Route::group([
    'middleware' => ['auth', 'chkadmin'],
    'prefix' => 'g1'
], function($router) {

    // Home
    Route::get('/', 'AdminController@index');
    // Accounts
    Route::get('/accounts', 'Admin\AccountsController@index');
    Route::get('/accounts/{action}/{id}', 'Admin\AccountsController@action');
    Route::post('/accounts/{action}/{id}', 'Admin\AccountsController@action');
    // Profile
    Route::get('/profile', 'Admin\ProfileController@index');
    Route::post('/profile/save', 'Admin\ProfileController@update');
});

// Mentor
Route::group([
    'middleware' => ['auth', 'chkmentor'],
    'prefix' => 'm2'
], function($router) {

    // Home
    Route::get('/', 'MentorController@index');
    // Accounts
    Route::get('/accounts', 'Mentor\AccountsController@index');
    Route::get('/accounts/{action}/{id}', 'Mentor\AccountsController@action');
    Route::post('/accounts/{action}/{id}', 'Mentor\AccountsController@action');
    // Profile
    Route::get('/profile', 'Mentor\ProfileController@index');
    Route::post('/profile/save', 'Mentor\ProfileController@update');
});


// Trader
Route::group([
    'middleware' => ['auth', 'chktrader'],
    'prefix' => 't3'
], function($router) {

    // Home
    Route::get('/', 'TraderController@index');
    // Accounts
    Route::get('/accounts', 'Trader\AccountsController@index');
    Route::get('/accounts/{action}/{id}', 'Trader\AccountsController@action');
    Route::post('/accounts/{action}/{id}', 'Trader\AccountsController@action');
    // Profile
    Route::get('/profile', 'Trader\ProfileController@index');
    Route::post('/profile/save', 'Trader\ProfileController@update');
});

// Web master
Route::group([
    'middleware' => ['auth', 'chkwebmaster'],
    'prefix' => 'w4'
], function($router) {

    // Home
    Route::get('/', 'WebMasterController@index');
    // Accounts
    Route::get('/accounts', 'WebMaster\AccountsController@index');
    Route::get('/accounts/{action}/{id}', 'WebMaster\AccountsController@action');
    Route::post('/accounts/{action}/{id}', 'WebMaster\AccountsController@action');
    // Profile
    Route::get('/profile', 'WebMaster\ProfileController@index');
    Route::post('/profile/save', 'WebMaster\ProfileController@update');
});
