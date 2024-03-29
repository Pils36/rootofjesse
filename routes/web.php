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
Route::get('/welcome', 'HomeController@welcome')->name('welcome here');

Route::get('/store', 'HomeController@store')->name('store');
Route::get('/watch-live', 'HomeController@watchLive')->name('watch live');
Route::get('/photo-gallery', 'HomeController@rojGallery')->name('photo gallery');
Route::get('/events', 'HomeController@events')->name('events');
Route::get('/give', 'HomeController@give')->name('give');
Route::get('/services', 'HomeController@services')->name('services');

Route::get('/contactus', 'ContactController@contactUs')->name('contact us');
Route::post('/contactus', 'ContactController@messageUs')->name('message us');

Route::get('/moremessages', 'MessageController@moreMessages')->name('more message');
Route::get('/onesermon/{id}', 'MessageController@oneMessage')->name('one sermon');



Route::prefix('admin')->group(function () {

    // Admin Login Page::
    Route::get('/login', 'AdminController@login')->name('admin login');
    Route::post('/login', 'AdminController@loginUser')->name('login');


    Route::post('/create-new-members', 'MemberController@createNewMember')->name('create new members');



    Route::middleware(['auth'])->group(function () {

        // Admin Dashboard::
        Route::get('/dashboard', 'AdminController@index')->name('dasboard');
        Route::get('/activity', 'AdminController@activity')->name('activity');
        Route::get('/profile', 'AdminController@profile')->name('profile');
        Route::get('/settings', 'AdminController@settings')->name('settings');


        // Gallery
        Route::get('/gallery', 'AdminController@gallery')->name('platform gallery');
        Route::get('/uploaded-gallery', 'AdminController@uploadedGallery')->name('uploaded gallery');
        Route::post('/delete-photo/{id}', 'MessageController@deletePhotoGallery')->name('delete photo');



        // Upload Sermon & Messages::
        Route::get('/upload-message', 'MessageController@uploadMessage')->name('upload message');
        Route::get('/all-message', 'MessageController@allMessages')->name('uploaded sermons');
        Route::get('/message-categories', 'MessageController@messageCategory')->name('message categories');
        Route::get('/create-message-category', 'MessageController@createCategory')->name('create message category');
        Route::get('/view-message/{id}', 'MessageController@viewMessages')->name('view message');
        Route::get('/edit-message/{id}', 'MessageController@editMessages')->name('edit message');
        Route::get('/edit-category/{id}', 'MessageController@editMessageCategory')->name('edit category');
        Route::post('/publish-message', 'MessageController@publishMessage')->name('publish message');
        Route::post('/delete-message/{id}', 'MessageController@deleteMessage')->name('delete message');
        Route::post('/new-category', 'MessageController@createNewCategory')->name('create new category');
        Route::post('/edit-this-category/{id}', 'MessageController@editThisMessageCategory')->name('edit this category');
        Route::post('/delete-category/{id}', 'MessageController@deleteMessageCategory')->name('delete category');


        // Platform Events
        Route::get('/all-events', 'EventController@allEvents')->name('uploaded events');
        Route::get('/upload-events', 'EventController@uploadEvents')->name('upload events');
        Route::post('/publish-event', 'EventController@publishEvent')->name('publish event');
        Route::get('/view-event/{id}', 'EventController@viewEvents')->name('view event');
        Route::get('/edit-event/{id}', 'EventController@editEvents')->name('edit event');
        Route::post('/delete-event/{id}', 'EventController@deleteEvent')->name('delete event');

        // Team
        Route::get('/team-members', 'TeamController@index')->name('team member');
        Route::get('/view-team/{id}', 'TeamController@view')->name('view team');
        Route::get('/create-team-member', 'TeamController@create')->name('create team member');
        Route::get('/edit-team-member/{id}', 'TeamController@editTeamMember')->name('edit team member');
        Route::post('/new-team-member', 'TeamController@createNewTeam')->name('create new team');
        Route::post('/delete-team-member/{id}', 'TeamController@deleteTeamMember')->name('delete team');






        // Church Members and First Timers
        Route::get('/members-list', 'MemberController@index')->name('members list');
        Route::get('/view-member/{id}', 'MemberController@view')->name('view member');
        Route::get('/create-members', 'MemberController@create')->name('create members');
        Route::get('/edit-church-member/{id}', 'MemberController@editChurchMember')->name('edit church member');
        Route::post('/edit-new-members/{id}', 'MemberController@editNewMember')->name('edit new members');
        Route::post('/delete-church-member/{id}', 'MemberController@deleteChurchMember')->name('delete member');




        // Settings
        Route::post('/change-theme', 'AdminController@changeTheme')->name('change theme');
        Route::post('/update-password', 'AdminController@updatePassword')->name('update password');
        Route::post('/update-profile', 'AdminController@updateProfile')->name('update profile');


        // Messaging
        Route::prefix('messaging')->group(function () {

            Route::get('/', 'MessagingController@index')->name('messaging');
            Route::get('/sent-mails', 'MessagingController@sent')->name('sent mails');
            Route::post('compose', 'MessagingController@compose')->name('compose mail');

        });



        // Logout User::
        Route::post('/logout', 'AdminController@logoutUser')->name('logout');

        Route::prefix('ajax')->group(function () {

            Route::post('/dropzonemessage', 'MessageController@receiveUpload')->name('dropzonemessage');
            Route::post('/dropzonegallery', 'MessageController@uploadGallery')->name('dropzonegallery');
            Route::post('/openmessage', 'MessagingController@openMessage')->name('openmessage');

        });


    });


});
