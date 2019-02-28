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
 Route::get('users', 'UserController@index')->name('indexUser');
 # Route untuk paparkan borang tambah user baru
Route::get('users/create', 'UserController@create')->name('createUser');
# Route untuk terima data dari borang tambah user baru
Route::post('users/create', 'UserController@store')->name('storeUser');
 # Route untuk paparkan borang edit user sedia ada
 Route::get('users/{id}/edit', 'UserController@edit')->name('editUser');
 # Route untuk terima data dari borang edit user sedia ada
 Route::patch('users/{id}/edit', 'UserController@update')->name('updateUser');
 # Route untuk delete rekod dalam table database
 Route::delete('users/{id}', 'UserController@destroy')->name('destroyUser');

/*
 * Routing untuk pengurusan joblist
 */
Route::get('joblist', 'JoblistController@index')->name('indexJoblist');
# Route untuk paparkan borang tambah joblist
Route::get('joblist/add', 'JoblistController@create')->name('createJoblist');
# Route untuk terima data daripada borang di joblist/add menerusi method POST
Route::post('joblist/add', 'JoblistController@store')->name('storeJoblist');
Route::get('joblist/{id}/edit', 'JoblistController@edit')->name('editJoblist');;
Route::patch('joblist/{id}/edit', 'JoblistController@update')->name('updateJoblist');
Route::delete('joblist/{id}', 'JoblistController@destroy')->name('destroyJoblist');











Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
