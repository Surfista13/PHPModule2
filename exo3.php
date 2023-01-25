<?php

//Fonction permettant de trouver le plus grand diviseur commun entre deux valeurs
function GCD ($val1,$val2){
    $valMin = min($val1,$val2);
    $valMax = max($val1,$val2);
    $gcd =0;

        for($i=$valMin;$i>=1;$i--){
            if($valMax % $i === 0 && $valMin % $i === 0 && $gcd === 0){
                $gcd = $i;
            }
        }
        return $gcd;
}
echo date('d-m-y h:i:s') . "<br/>";
echo "Le GCD est " . GCD (1000323445,1421313212). "<br/>";
echo date('d-m-y h:i:s') . "<br/>";