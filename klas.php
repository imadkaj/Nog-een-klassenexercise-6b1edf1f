<?php

$a = readline("Wie zit er in de klas? " . PHP_EOL);
$names = explode(" ", $a);
echo "De studenten in de klas zijn: " . PHP_EOL;
foreach ($names as $b) {
echo "$b \n";
}
