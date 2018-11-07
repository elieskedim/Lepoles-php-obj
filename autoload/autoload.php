<?php
function inclusionAutomatique($nomDeLaClasse){
    include_once($nomDeLaClasse . '.class.php');
}
spl_autoload_register('inclusionAutomatique');
//--------------------------------------
/* 
spl_autoload_register() : permet d'éxecuter une fonction lorsque l'interpreteur voit passer un 'new' dans le code
Le nom à coté du new est récuperé et transmi automatiquement à la fonction
//ATTENTION !! Pour que l'autoload fonctionne, il est INDISPENSSABLE de respecter une convension de nommage sur les fichiers.
*/