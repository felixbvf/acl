<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Auth::loginUsingId(2);
Route::get('/', function () {
    return view('welcome');
});

Route::get('posts','PostController@index');
Route::get('edit-post/{id}', 'PostController@edit');

// Route::get('edit-post/{id}', function ($id) {
 
//     // Let's just pretend we are logged in as the user with ID 1
//     Auth::loginUsingId(1);
 
//     // Now let's try to find a post
//     $post = Acl\Post::findOrFail($id);
 
//     // Do we have access to update it?
//     if (Gate::denies('update-post', $post)) {
//         //abort(403);
//         return redirect('/');
//     }
 
//     // Then we show the form, etc. but for now just the title is fine:
//     return $post->title;
 
// });
