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



// Basic Pages
Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about us');
Route::get('/contactus', 'HomeController@contactUs')->name('contact us');



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
        Route::get('/edit-team-member/{id}', 'TeamController@editTeamMember')->name('edit team member');
        Route::post('/new-team-member', 'TeamController@createNewTeam')->name('create new team');
        Route::post('/delete-team-member/{id}', 'TeamController@deleteTeamMember')->name('delete team');




        // Church Members and First Timers
        Route::get('/members-list', 'MemberController@index')->name('members list');
        Route::get('/create-members', 'MemberController@create')->name('create members');
        Route::post('/create-new-members', 'MemberController@createNewMember')->name('create new memebers');

        


        // Logout User::
        Route::post('/logout', 'AdminController@logoutUser')->name('logout');

        Route::prefix('ajax')->group(function () {

            Route::post('/dropzonemessage', 'MessageController@receiveUpload')->name('dropzonemessage');

        });

        
    });


});
