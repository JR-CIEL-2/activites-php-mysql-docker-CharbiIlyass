<?php

function moyenne($notes){
    $somme=0;
    for($i=0;$i<count($notes);$i++){
        $somme += $notes[i];
    }
    return $somme/count($notes);
}

function mediane($salaire){
        if ($n % 2 !== 0) {
            return $salaire[(int)($n / 2)];
        } else { 
            return ($salaire[(int)($n / 2) - 1] + $salaire[(int)($n / 2)]) / 2;
        }
}
    
?>