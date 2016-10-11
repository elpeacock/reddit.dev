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
    $my_name = 'Liz';
    $data['my_name'] = $name;

    //cameron's preferred way of passing data to the view
    return view('my-first-view')->with($data);


});

Route::get('/sayhello/{name?}', function ($name = 'Lassen') {
    if ($name == 'Chris') {
        return redirect('/');
    }
    return 'Hello ' . $name;
}); 

Route::get('/uppercase/{word?}', function($word = 'Lassen') {
    $data['word'] = $word;
    $data['uppercase'] = strtoupper($word); 
    return view('uppercase')->with($data);
});

Route::get('/increment/{number?}', function($number = 5) {
    $data['number'] = $number;
    $data['incremented'] = $number + 1;
    return view('increment')->with($data);
});

Route::get('/add/{firstnumber?}/{secondnumber?}', function($firstnumber = 3, $secondnumber = 8) {
    return $firstnumber + $secondnumber;
});

Route::get('/rolldice/{guess?}', function($guess = 3) {
    $data['roll'] = rand(1, 6);
    $data['guess'] = $guess;
    $data['correct'] = ($data['roll'] == $data['guess']);
    return view('roll-dice')->with($data);
});

