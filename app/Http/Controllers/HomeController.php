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

	public function increment($number) {
		$number += 1;
		$data['number'] = $number;

		return view('increment', $data);
	}


}





