<?php
header("Content-Type: text/plain");

$pokemon = ["Pikachu","Gengar","Lucario"];
echo $pokemon[array_rand($pokemon)];