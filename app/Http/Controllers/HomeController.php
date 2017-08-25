<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
	public function showWelcome() {

		return view('welcome');
	}

	public function uppercase($word) {

		$newString = strtoupper($word);
		$data['newString'] = $newString;
		$data['word'] = $word;

    	return view('uppercase', $data);
	}

	public function increment($number=0) {

		if ($number > 5) {
			
			$data['number'] = $number;
	
			return redirect()->action('HomeController@resetToZero', $data);

		} else {
			$number += 1;
			$data['number'] = $number;
			return view('increment', $data);
		}

	}

			
	public function resetToZero($number=0) {
		$data['number'] = 0;
		return view('increment', $data);

	}

}







