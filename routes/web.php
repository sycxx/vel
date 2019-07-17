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

/* 

Route::get('/about', function(){
     return view('pages.about');
 });

 Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is user ' .$name. 'with an id '.$id;
});
 */

Route::get('/', 'PagesController@index');
route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::resource('posts','PostController');




// Route::get('/about', function(){
//     return view('pages.about');
// });
// Route::get('/services', function(){
//     return view('pages.services');
// });