﻿<?php
function getArticles($nb){

$articles = [

     [ 'titre' => 'Article 1',

        'texte' => 'Ceci est le premier article',

        'auteur' => 'wiem',

        'date' => '06-10-2021',],

    [  'titre' => 'Article 2',

        'texte' => 'Ceci est le deuxième article',

        'auteur' => 'leila',

        'date' => '09-12-2021', ],

    [ 'titre' => 'Article 3',

        'texte' => 'Ceci est le troisième article',

        'auteur' => 'rami',

        'date' => '05-08-2021', ],
        [ 'titre' => 'Article 4',

        'texte' => 'Ceci est le quatrième article',

        'auteur' => 'yosra',

        'date' => '05-07-2021', ],
];

	
	// Compare function
	function date_compare($element1, $element2) {
    $datetime1 = strtotime($element1['date']);
    $datetime2 = strtotime($element2['date']);
    return $datetime2 - $datetime1;
}
    // Sort the array 
	usort($articles, 'date_compare');


	    if ($nb>0 && $nb<=3)

    {
	
	foreach($articles as $singlearr){
		echo "[";
		foreach($singlearr as $values){
			$sliced_array[] = array_slice($articles, 0, $nb);
      
      return print_r($sliced_array);}
		echo"]";
		
	}
    }

    else  {
        print_r($articles);
       

    }
}
getArticles(3);?>