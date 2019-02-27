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
    return view('home');
});

Route::get('contact-us', function () {
    return 'ini adalah halaman hubungi';
})->name('cu');

Route::get('about-us', function () {
    return 'Ini adalah halaman tentang kami';
})->name('au');


/*
 * Routing untuk pengurusan users
 */
# Route untuk paparkan senarai users`
 Route::get('users', 'UserController@index');
 # Route untuk paparkan borang tambah user baru
Route::get('users/create', 'UserController@create');
 # Route untuk paparkan borang edit user sedia ada
 Route::get('users/{id}/edit', 'UserController@edit')->name('editUser');

/*
 * Routing untuk pengurusan joblist
 */
Route::get('joblist', 'JoblistController@index');
# Route untuk paparkan borang tambah joblist
Route::get('joblist/add', 'JoblistController@create');
# Route untuk terima data daripada borang di joblist/add menerusi method POST
Route::post('joblist/add', 'JoblistController@store');

Route::get('joblist/{id}/edit', 'JoblistController@edit');
Route::patch('joblist/{id}/edit', 'JoblistController@update');











Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
