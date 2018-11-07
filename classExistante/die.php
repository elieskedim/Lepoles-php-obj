<?php
function recherche($tab, $element){
    if(!is_array($tab)){
        die("Vous devez indiquez un Array !"); //Le die permet d'arêter l'éxecution du code
    }
    $position = array_search($element, $tab);
    return $position;
}

$liste = array('orange', 'fraise', 'bananne');
echo recherche($liste, 'bananne') . '<br>';//affiche 2 (ici la position de bananne dans mon tableau $liste)
echo recherche($liste, 'orange') . '<br>';
echo recherche($liste, 'fraise') . '<br>';
echo recherche($liste, 'pomme') . '<br>';
echo recherche(42, 'bananne') . '<br>';
echo 'Salut Elies';