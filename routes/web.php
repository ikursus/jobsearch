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
 Route::get('users', function () {

    $rekod_users = [
        [
            'id' => '1',
            'nama' => 'Ali',
            'email' => 'ali@gmail.com'
        ],
        [
            'id' => '2',
            'nama' => 'John',
            'email' => 'john@gmail.com'
        ],
        [
            'id' => '3',
            'nama' => 'Lee',
            'email' => 'lee@gmail.com'
        ],
    ];

     return view('template_users/senarai_users', compact('rekod_users'));

 });
 # Route untuk paparkan borang tambah user baru
Route::get('users/create', function () {
    return view('template_users/tambah_user');
});
 # Route untuk paparkan borang edit user sedia ada
 Route::get('users/{id}/edit', function ($id) {
    return view('template_users/edit_user', compact('id'));
})->name('editUser');














Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
