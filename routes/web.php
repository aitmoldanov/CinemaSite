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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/price', function () {
    return view('price');
});

Route::get('/film', 'MovieController@film');
Route::get('/serial', 'MovieController@serial');
Route::get('/cartoon', 'MovieController@index');
Route::get('/cart', 'MovieController@cart');

Route::get('add-to-cart/{id}', 'MovieController@addToCart');
Route::delete('remove-from-cart', 'MovieController@remove');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['as'=>'admin.','prefix' => 'admin', 'namespace' => 'Admin', 'midlleware' => ['auth','admin']],
    function(){
        Route::get('dashboard', 'DashboardController@index') -> name('dashboard');
    }
);
Route::group(['as'=>'author.','prefix' => 'author', 'namespace' => 'Author', 'midlleware' => ['auth','admin']],
    function(){
        Route::get('dashboard', 'DashboardController@index') -> name('dashboard');
    }
);
Route::get('/create','MovieController@create')->name('create');

Route::post('/create','MovieController@store')->name('store');

Route::get('/table','MovieController@show')->name('table');
Route::get('/edit/{id}','MovieController@edit')->name('edit');

Route::post('/update/{id}','MovieController@update')->name('update');

Route::delete('/delete/{id}','MovieController@delete')->name('delete');

Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/post/store', 'PostController@store')->name('post.store');

Route::get('/posts', 'PostController@index')->name('posts');
Route::get('/post/show/{id}', 'PostController@show')->name('post.show');

Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');


