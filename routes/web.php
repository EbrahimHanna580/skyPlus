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

Route::get('/', 'PagesController@index')->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contacti', function () {
    return view('contacti');
})->name('contacti');


Route::get('blog', 'BlogController@index')->name('blog');
Route::get('blog/{id}/view', 'BlogController@viewBlog')->name('view_blog');

Route::get('all_articles', 'PagesController@getAllArticles');

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/consultingServices', function () {
    return view('consultingServices');
})->name('consultingServices');
