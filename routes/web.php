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
    return redirect()->route('books.index');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('books', 'BookController');
    Route::get('/users/{id}/subscriptions', 'UserSubscriptionsController@index')->name('users.subscriptions.index');
});
