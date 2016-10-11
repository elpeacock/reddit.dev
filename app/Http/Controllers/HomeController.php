<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function showUppercase($word = 'Lassen')
    {
        $data['word'] = $word;
    	$data['uppercase'] = strtoupper($word); 
    	return view('uppercase')->with($data);
	}

	public function showIncrement($number = 4)
	{
		$data['number'] = $number;
    	$data['incremented'] = $number + 1;
    	return view('increment')->with($data);
	}

}