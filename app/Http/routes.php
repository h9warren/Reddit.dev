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

Route::get('/uppercase/{word}', 'HomeController@uppercase');

Route::get('/increment/{number}', 'HomeController@increment');
Route::get('/resetToZero/{number}', 'HomeController@resetToZero');


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
Route::get('/', 'HomeController@showWelcome');

Route::resource('posts','PostsController');

// Route::get('orm-test', function () {

// 	$post1 = new App\Models\Post();
// 	$post1->title = "dogs are cool";
// 	$post1->url = "https://www.petfinder.com/dogs/bringing-a-dog-home/facts-about-new-dog/";
// 	$post1->content = "This is a list of ways dogs are cool";
// 	$post1->created_by = 1;
// 	$post1->save(); 

// 	$post2 = new App\Models\Post();
// 	$post2->title = "Cool cat facts";
// 	$post2->url = "https://www.buzzfeed.com/chelseamarshall/meows?utm_term=.pr5Q1G4XA#.vl23zYmk7";
// 	$post2->content = "buzzfeed artilce about catz";
// 	$post2->created_by = 1;
// 	$post2->save();

// 	$post3 = new App\Models\Post();
// 	$post3->title = "lasers are insane";
// 	$post3->url = "http://www.pcworld.com/article/2894114/this-insane-military-laser-weapon-burned-a-hole-through-a-truck-a-mile-away.html";
// 	$post3->content = "lasers are crazy man. burnt a dang hole thru a truck";
// 	$post3->created_by = 1;
// 	$post3->save(); 



// });

    
	


