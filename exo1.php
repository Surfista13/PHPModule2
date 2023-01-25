<?php
    //Fonction permettant de renvoyer le nombre de coups necessaire pour tirer au hazard le nombre rentré en paramètre.
    function alea($valMax){
        $i = 0;
        $count = 0;
        while($i != $valMax){
            $i = rand(0,$valMax);
            $count++;
        }
        return $count;
    }

    $result = alea(998);
    echo $result;
