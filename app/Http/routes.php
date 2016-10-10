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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sayhello/{name?}', function ($name = 'Lassen') {
	if ($name == 'Chris') {
		return redirect('/');
	}
	return 'Hello ' . $name;
}); 

Route::get('/uppercase/{word?}', function($word = 'Lassen') {
	return strtoupper($word); 
});

Route::get('/increment/{number?}', function($number = 5) {
	return $number + 1;
});

Route::get('/add/{firstnumber?}/{secondnumber?}', function($firstnumber = 3, $secondnumber = 8) {
	return $firstnumber + $secondnumber;
});

