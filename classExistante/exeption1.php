<?php
// Exception : version procedural et tendance orienté Objet.
//L'avantage des exception est ded centraliser à effectuer dans le catch en cas d'érreur.
function recherche($tab, $element){
    if(!is_array($tab)){
        throw new Exception('Vous devez envoyer un Array !');
        //Throw permet de nous envoyer dans le bloc catch et de stoper l'éxecution du code.
    }
    if(sizeof($tab) <= 0){
        throw new Exception("Vous devez envoyer un array avec du contenue");
        
    }
    $position = array_search($element, $tab);
    return $position;
}

$tab = array();
$liste = array('orange', 'fraise', 'bananne');

try{// bloc d'éssai (On éssai deffectuer les instruction suivante dans le try)
    echo recherche($liste, 'fraise') . '<br>';
    //echo recherche($tab, 'fraise') . '<br>';
    echo recherche('poire', 'fraise') . '<br>';
    echo 'Traitement.....';
}
catch(Exception $e){//bloc de capture. On va attraper les exception 'Exception4 s'il y en a une qui est relever. $e represente l' 'Exception' car en renseignant le 'Throw', je n'ai pas pu mettre le nom d'une variable puisque l'exception est stoper pour arriver dans le catch.

    echo "Message d'érreur : " . $e->getMessage() . '<br>';
    echo "Traitement conforme dans le cas où l'argument ne soit pas un Array, OU que l'argument soit un array vide. <br>";
    echo "Information : " . $e->getCode() . "<br>Message : " . $e->getMessage() . "<br>Fichier : " . $e->getFile() . "<br>Ligne : " . $e->getLine()  . "<br>";
}
//*-------------------------------------------------------------------------------------------------------------------------------------------------------------*
/*
Exception : est une class prédéfinie
Une Excepetion est une erreur que l'on peut attraper grâce à try/catch
Throw : permet d'aretter l'éxecution du 'try' et de rentrer dans le 'catch'
try et catch permet d'avoir 2 bloc d'instruction d'istinctes.
*/
//----------------------------------------------------------------------------------------------------------------------------------------------------------------
echo "<hr><hr>";
try{
    $bdd = new PDO('mysql:host=localhost;dbname=tonton', 'root', '');
    echo "Connexion réussi";
}catch(PDOException $e){//bloc de capture. On va attraper les exception 'Exception4 s'il y en a une qui est relever. $e represente l' 'Exception' car en renseignant le 'Throw', je n'ai pas pu mettre le nom d'une variable puisque l'exception est stoper pour arriver dans le catch.

    echo "Message d'érreur : " . $e->getMessage() . '<br>';
    echo "La connexion  à la base de donnéées à échouer";
}

echo "<pre>";
print_r(get_class_methods($e));
echo "</pre>";