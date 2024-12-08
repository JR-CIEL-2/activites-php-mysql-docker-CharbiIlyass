<?php
include 'budget.php';
$achats = 1000; 
$budget = 120;              
if (budget($achats, $budget)) {
    echo "Le budget est suffisant.";
} else {
    echo "Le budget est insuffisant.";
}
?>