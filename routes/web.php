<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', 'HomeController@index')->name('home');



Route::prefix('admin')->group(function () {

    // Admin Login Page::
    Route::get('/login', 'AdminController@login')->name('admin login');
    Route::post('/login', 'AdminController@loginUser')->name('login');


    Route::middleware(['auth'])->group(function () {

        // Admin Dashboard::
        Route::get('/dashboard', 'AdminController@index')->name('dasboard');

        // Upload Sermon & Messages::
        Route::get('/upload-message', 'MessageController@uploadMessage')->name('upload message');
        Route::get('/all-message', 'MessageController@allMessages')->name('uploaded sermons');
        Route::get('/view-message/{id}', 'MessageController@viewMessages')->name('view message');
        Route::get('/edit-message/{id}', 'MessageController@editMessages')->name('edit message');
        Route::post('/publish-message', 'MessageController@publishMessage')->name('publish message');
        Route::post('/delete-message/{id}', 'MessageController@deleteMessage')->name('delete message');





        // Team
        Route::get('/team-members', 'TeamController@index')->name('team member');
        Route::get('/create-team-member', 'TeamController@create')->name('create team member');
        Route::post('/new-team-member', 'TeamController@createNewTeam')->name('create new team');

        


        // Logout User::
        Route::post('/logout', 'AdminController@logoutUser')->name('logout');

        Route::prefix('ajax')->group(function () {

            Route::post('/dropzonemessage', 'MessageController@receiveUpload')->name('dropzonemessage');

        });

        
    });


});
