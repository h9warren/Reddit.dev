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

Route::get('/uppercase/{word}', function ($word) {
    $newString = strtoupper($word);
    $data['newString'] = $newString;
    $data['oldString'] = $word;

    return view('uppercase', $data);
});

Route::get('/increment/{number}', function ($number) {
    $number += 1;
    $data['number'] = $number;

    return view('increment', $data);
});


Route::get('/add/{numberA}/{numberB}/', function ($numberA, $numberB) {
    
	if (is_numeric($numberA) && is_numeric($numberB)) {
    	
    	$sum = $numberA + $numberB;

    	echo "<h1>$sum</h1>";
	
	} else {
		
    	echo "<h1>404</h1>";
	}
		
});
Route::get('/rolldice/{guess?}', function($guess = 2){
	
	$rando = random_int(1,6);
	// $data['number'] = $rando;
	$data = ['number' => $rando, 'guess' => $guess];
	
	return view('roll-dice', $data);
});

    
	


