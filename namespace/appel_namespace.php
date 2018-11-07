<?php require_once('namespace_ab.php'); ?>
<?php
// erreur : on ne peut pas déclarer deux fonction avec le même nom
//function test(){}
//function test(){}

echo A\ville();
echo '<br>';
echo A\strlen();
echo '<hr>';
echo B\ville();
echo '<br>';
echo B\strlen();

//-------------------------------------------------------------------------
/* 
Les namespace permettent de classer mes "classes".
Pratique pour classer les fonctions
Evite à plusieurs développeur travailant sur le m^me projet de rentrer en collision lors du nomage d'une méthode ou d'une classe.
*/