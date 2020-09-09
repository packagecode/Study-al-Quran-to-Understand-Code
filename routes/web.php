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
$suffix = '.html';
Route::get('/', 'PublicController@index');
Route::get('/about' . $suffix, 'PublicController@about')->name('about');
Route::get('/contact' . $suffix, 'PublicController@contact')->name('contact');
Route::post('/contact' . $suffix, 'PublicController@contact')->name('contact.store');
Route::get('/publication' . $suffix, 'PublicController@publication')->name('publication');
Route::get('/gallery' . $suffix, 'PublicController@gallery')->name('gallery');
Route::get('/liveclass' . $suffix, 'PublicController@liveclass')->name('liveclass');
Route::get('/important_link' . $suffix, 'PublicController@importantIink')->name('important.link');
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('user')->group(function () {
    Route::get('contact/message', 'HomeController@message')->name('contact.message.index');
    Route::resource('publication', 'PublicationController');
    Route::resource('quranclass', 'QuranClassController');
    Route::resource('slider', 'SliderController');
    Route::resource('liveclass', 'LiveClassController');
    Route::resource('implink', 'ImportantLinkController');
    Route::resource('gallery', 'GalleryController');
});
