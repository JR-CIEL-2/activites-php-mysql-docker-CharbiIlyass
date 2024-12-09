<?php

function budget($achats, $budget) {
    $totalAchats = 0;

    for ($i = 0; $i < count($achats); $i++) {
        $totalAchats += $achats[$i];
    }

    return $budget >= $totalAchats;
}
?>