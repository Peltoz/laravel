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

// Route::get('posts', function(){
//     return 'test';
// });

Route::get('posts/{postID?}', function($postID = 1){
    return 'Post ID :' . $postID;
}) -> name('posts');

Route::get('test', 'TestController@test')->name('test');

Route::get('posts/{postId}/comments/{commentsID}', function($postId, $commentsID){
    return 'Post ID :' . $postId. 'cId :'. $commentsID;
});





Route::group(['middleware' => 'auth'], function(){

    Route::get('dashboard', function(){
        return 'Dashboard';
    });

    Route::get('user/profile', function(){
        return 'USERPROFILE';
    });
});

Route:group(['prefix' => 'system'], function(){

    Route::get('show', function(){
        return 'show';
    });

    Route::get('edit', function(){
        return 'edit';
    });
});