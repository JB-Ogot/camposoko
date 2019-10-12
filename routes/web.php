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

use GuzzleHttp\Psr7\Request;

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/terms','PagesController@terms');


//Route::resource('posts','PostsController');
//Route::get('/posts/payment');
Route::get('/posts/payment', function () {
    // Only authenticated users may enter...
})->middleware('auth');

Route::post('/posts/store','PostsController@store');
Route::post('/posts/messages','MessageController@save');
Route::post('/posts/payup','PostsController@payup');
Route::post('/','PostsController@create');



Auth::routes([
    'verify'=>true,

]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/info', 'PagesController@info');
Route::post('/payment','PagesController@payment');
Route::post('/posts/authenticated','PostsController@authenticated');

Route::post('/search','PostsController@search');

//Route::get('/single/{category}','PostsController@load_category');
Route::get('/posts/single/{id}','PostsController@load_single');
Route::get('/single/phones','SinglesController@phones');
Route::get('/single/tvs','SinglesController@tvs');
Route::get('/single/elec','SinglesController@elec');
Route::get('/single/house','SinglesController@house');
Route::get('/single/furn','SinglesController@furn');
Route::get('/single/apart','SinglesController@apart');
Route::get('/single/beauty','SinglesController@beauty');
Route::get('/single/events','SinglesController@events');
Route::get('/single/tvs/prof','SinglesController@prof');
Route::get('/single/food','SinglesController@food');
Route::get('/single/bars','SinglesController@bars');
Route::get('/posts/listrem','PostsController@remove');
Route::get('/posts/delete/{id}','PostsController@destroy');
