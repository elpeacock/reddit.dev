<?php

use App\Models\Post;
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

// Route::get('/', function () {
//     $my_name = 'Liz';
//     $data['my_name'] = $name;

//     //cameron's preferred way of passing data to the view
//     return view('my-first-view')->with($data);


// });

// Route::get('/sayhello/{name?}', function ($name = 'Lassen') {
//     if ($name == 'Chris') {
//         return redirect('/');
//     }
//     return 'Hello ' . $name;
// }); 

// Route::get('/uppercase/{word?}', 'homeController@showUppercase'); 

// Route::get('/increment/{number?}', 'homeController@showIncrement'); 

// Route::get('/add/{firstnumber?}/{secondnumber?}', function($firstnumber = 3, $secondnumber = 8) {
//     return $firstnumber + $secondnumber;
// });

// Route::get('/rolldice/{guess?}', function($guess = 3) {
//     $data['roll'] = rand(1, 6);
//     $data['guess'] = $guess;
//     $data['correct'] = ($data['roll'] == $data['guess']);
//     return view('roll-dice')->with($data);
// });

Route::resource('posts', 'PostsController');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');

Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');

Route::post('auth/register', 'Auth\AuthController@postRegister');

// Route:get('orm-test', function()
// {
//     $post1 = new \App\Models\Post();
//     $post1->title = 'Eloquent is awesome!';
//     $post1->url='https://laravel.com/docs/5.1/eloquent';
//     $post1->content  = 'It is super easy to create a new post.';
//     $post1->created_by = 1;
//     $post1->save();

//     $post2 = new \App\Models\Post();
//     $post2->title = 'Eloquent is really easy!';
//     $post2->url='https://laravel.com/docs/5.1/eloquent';
//     $post2->content = 'It is super easy to create a new post.';
//     $post2->created_by = 1;
//     $post2->save();
// });











