<?php

$value1 = 1;
$value2 = 7;
$operator = '+';
$resultat;

if(is_numeric($value1) == true && is_numeric($value2) == true){
    if($operator == "/" && $value2 == 0){
        die( "Calculer impossible. \n");
    }
    else{
        switch ($operator) {
            case '+':
                $resultat = $value1 + $value2;
                print "égal : " . $resultat ."\n";
                break;
            case '-':
                $resultat = $value1 - $value2;
                print "égal : " . $resultat ."\n";
                break;
            case '*':
                $resultat = $value1 * $value2;
                print "égal : " . $resultat ."\n";
                break;
            case '/':
                $resultat = $value1 / $value2;
                print "égal : " . $resultat ."\n";
                break;
            default:
                print "Erreur de calcul. \n";
                break;
        }
    }
}
else{
    die( "Calculer impossible. \n");
}
