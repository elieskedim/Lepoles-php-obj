<?php
//Les méthodes magiques s'éxecute automatiquement.
class Societe{
     
    public $adresse;
    public $ville;
    public $cp;

    public function __construct(){}
    
    public function __set($nom, $valeur){// Cette méthode va se déclancher uniquement en cas de tentative d'affectation sur une propriété innéxistante.
        echo 'La propriété ' . $nom . ' n\'éxiste pas, et la valeur ' .$valeur. ' n\'as donc pas été affecter ! <br>';
    }

    public function __get($nom){//Se déclenche uniquement en cas d'appel d'une propriété innéxistante.
        echo 'La propriété ' . $nom . ' n\'éxiste pas, donc on ne peut pas l\'afficher ! <br>';
    }

    public function __call($name, $arguments){//Se declenche uniquement en cas de tentative d'éxecution sur une méthodes qui n'éxiste pas
        echo "Tentative d'éxecuté la méthode $name mais elle n'éxiste pas.<br> Les arguments : " . implode(' - ', $arguments) . "<br>";
    }
}

//----------------------------------------------------------------
$societe1 = new Societe;
//$societe1->villes = 'Paris'; // test - lorsque l'on tente d'affecter une valeur à une propriété qui n'éxiste pas, ca fonctionne et ajoute donc la propriété et sa valeur à l'objet société1.
//echo $societe1->titre; // erreur, undefine, la propriété n'éxiste pas ! 
//$societe1->methode(); // erreur fatal, la methode n'éxiste pas ! 
$societe1->pays = 'France';//déclenchement de la méthode __set() au lieu de la  création d'une nouvelle propriété
$societe1->ville = 'Paris';// La propriété éxiste, donc pas déclenchement de __set().
echo $societe1->pays; // Déclenche la methode __get() au lieu d'une erreur undefine.
$societe1->methode('test', 23);//Déclenchement de la méthode __call() au lieu d'une érreur fatal.

echo '<div style="background-color: #f8d6d9;padding: 2px; margin-top:10px;">';
print('<pre>');
print_r($societe1);
print('</pre>');
echo '</div>';

//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
/* 
Il existe plusieurs autres methodes magiques.
__callStatic($nom, $argument) => pour les methodes 'static'
__isset($nom) => se lance lors d'une condition isset/empty sur une propriété
__destruct() => se lance a la fin de l'éxécution du script.(pratique pour fermer la connexion a la bdd par exemple)
etc... => voir la doc 
*/