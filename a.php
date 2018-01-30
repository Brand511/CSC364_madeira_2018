<?php

	$family = ['Jones', 'Fred', 'Pittsburgh', '15212'];

	echo 'My first name is ' . $family[1];

	echo '<br>';


	// print_r($family); die();

	$colors = ['red', 'blue', 'green'];

	// Assciative Array
	$family = [ 'ln' => 'Jones', 
				'fn' => 'Fred', 
				'city' => 'Pittsburgh', 
				'zip' => '15212'
			];

	echo '<h1>Last name is: ' . $family['ln'] . '</h1>';
	echo '<br>';


	// Assciative Array - two dimensions
	$families = [

			[ 'ln' => 'Jones', 
				'fn' => 'Fred', 
				'city' => 'Pittsburgh', 
				'zip' => '15212'
			],

			[ 'ln' => 'Smith', 
				'fn' => 'Mike', 
				'city' => 'eacer Falls', 
				'zip' => '15010'
			]

		];

		echo '<pre>';
		print_r($families);
		echo '</pre>';

		echo 'My name is: ' . $families[1]['fn']    . ' ' . $families[1]['ln'] ;

		// Loop through the families
		foreach ($families as $family) {
			printName($family);
		}


		foreach ($families as $family) {
			printName($family);
		}

		$text = 'This is sample text for [fn] [ln].  It is really nice text.<br>';

		echo $text;


		foreach ($families as $family) {
			$text = 'This is sample text for [fn] [ln].  It is really nice text.<br>';

			$text = str_replace('[fn]', $family['fn'], $text);
			$text = str_replace('[ln]', $family['ln'], $text);
			echo $text;
		}








	echo 'The end!';


	function printName($f){

		echo '<h1>Last name is not: ' . $f['ln'] . '</h1>';
		echo '<br>';

		return;

	}

