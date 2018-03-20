<?php

$argv;
$temperature;

if ($argv[1] > 30){
	die("Impossible de choisir cette température. \n");
}
else {
	switch($argv[1]){
		case 1 :
			$temperature = 1;
			print("La température est de " .$temperature ." degré. \n");
			break;
		case 5 :
			$temperature = 5;
			print("La température est de " .$temperature ." degré. \n");
			break;
		case 10 :
			$temperature = 10;
			print("La température est de " .$temperature ." degré. \n");
			break;
		case 25 :
			$temperature = 25;
			print("La température est de " .$temperature ." degré. \n");
			break;
		case 27 :
			$temperature = 27;
			print("La température est de " .$temperature ." degré. \n");
			break;
		case 30 :
			$temperature = 30;
			print("La température est de " .$temperature ." degré. \n");
			break;

	}
}
