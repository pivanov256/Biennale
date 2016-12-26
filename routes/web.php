<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/','HomeController@home');

Route::get('/terms','StaticPagesController@terms');
Route::get('/about','StaticPagesController@about');
Route::get('/vision','StaticPagesController@vision');
Route::get('/contact','StaticPagesController@contact');
Route::get('/scholarships','StaticPagesController@scholarships');
Route::get('/bachelor','StaticPagesController@bachelor');
Route::get('/master','StaticPagesController@master');
Route::get('/phd','StaticPagesController@phd');
Route::get('/authors','StaticPagesController@authors');
Route::get('/partners','StaticPagesController@partners');

Route::get('/archive','ArchiveController@archive');

Route::get('/news','NewsController@news');
Route::get('/news/add', 'NewsController@add');
Route::post('/news/add', 'NewsController@create');
Route::get('/news/all', 'NewsController@getAll');
Route::get('/news/{id}', 'NewsController@getArticle');
Route::get('/news/edit/{id}', 'NewsController@edit');
Route::post('/news/edit/{id}', 'NewsController@update');
Route::delete('/news/{id}', 'NewsController@delete');

Route::get('/events','EventsController@events');
Route::get('/events/create', 'EventsController@create');
Route::post('/events/create', 'EventsController@add');

Route::get('/program','ProgramController@program');

Route::get('/apply-for-attendance','FormsController@applyForAttendanceForm');
Route::post('/apply-for-attendance','FormsController@sendEmail');
Route::post('/apply', 'FormsController@sendForm');
Route::get('send-email','FormsController@sendEmail');

Route::get('/register', 'AuthController@showRegister');
Route::post('/register', 'AuthController@registerUser');

Route::get('/signin', 'AuthController@showLogin');
Route::post('/signin', 'AuthController@loginUser');

Route::get('/testauth', 'AuthController@test');

Route::get('/logout', 'AuthController@logout');

Route::get('/admin', 'Admin\AdminController@home_admin')->middleware('isAdmin');

Route::get('/admin/showEvents', 'Admin\AdminController@show_events')->middleware('isAdmin');
Route::get('/admin/createEvent', 'Admin\AdminController@create_event')->middleware('isAdmin');
Route::post('/admin/createEvent', 'Admin\AdminController@add_event')->middleware('isAdmin');
Route::get('/admin/editEvent/{id}', 'Admin\AdminController@edit_event')->middleware('isAdmin');
Route::post('/admin/editEvent', 'Admin\AdminController@edit_event_save')->middleware('isAdmin');
Route::post('/admin/deleteEvent', 'Admin\AdminController@delete_event')->middleware('isAdmin');

Route::get('/admin/authors/add', 'AuthorController@add')->middleware('isAdmin');
Route::post('/admin/authors/add', 'AuthorController@create')->middleware('isAdmin');
Route::get('/admin/authors/edit/{id}', 'AuthorController@edit')->middleware('isAdmin');
Route::post('/admin/authors/edit/{id}', 'AuthorController@update')->middleware('isAdmin');
Route::get('/authors/{id}', 'AuthorController@show');
Route::get('/admin/authors/all', 'AuthorController@all')-middleware('isAdmin');
Route::post('/admin/authors/delete/{id}', 'AuthorController@delete')->middleware('isAdmin');