<?php



Auth::routes();

Route::get('/', 'HomeController@dashboardV1')->name('dashboard-v1');
Route::get('/dashboard', 'HomeController@dashboardV1')->name('dashboard-v1');

//book routing path
Route::get('/new_book', 'BookController@addbook')->name('new_book');
Route::get('/search_book', 'BookController@searchbook')->name('search_book');
Route::get('/details_book', 'BookController@detailsbook')->name('details_book');

//member routing path
Route::get('/new_member', 'MemberController@addmember')->name('new_member');
Route::get('/new_user', 'UserController@adduser');
Route::post('/savemember', 'MemberController@store');