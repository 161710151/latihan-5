<?php

class baju {

	public $ukuran 		= 'xl';
	public $berbahan 	= 'sutra';
	public $model		= 'pria';

}

$baju1 = new baju ;
echo "baju". '<br>' ; 
echo "	Ukuran baju 		: " .$baju1->ukuran. 	'<br>' ; 
echo "	Baju berbahan 		: " .$baju1->berbahan. 	'<br>' ;
echo "	Model baju 			: " .$baju1->model. 	'<br>' ;   

echo "<br>";

class celana {

	public $ukuran 		= 'xl';
	public $berbahan 	= 'katun';
	
}

$celana1 = new celana ;
echo "celana". '<br>' ; 
echo "	Ukuran celana 		: " .$celana1->ukuran. 	'<br>' ; 
echo "	celana berbahan 		: " .$celana1->berbahan. 	'<br>' ;




?>
