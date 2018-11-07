<?php
$tab = array('orange', 'fraise', 'poire');

$objet = (object) $tab; // transformation (cast) 

var_dump($objet);

//Un objet fait parti de la stdClass (class standard de php) lorsque celui-ci est 'orphelin' et n'a pas été instancier par "new".

$objet2 = new stdClass;
$objet2->titre = 'PoleS';
var_dump($objet2);