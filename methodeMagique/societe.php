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
}

//----------------------------------------------------------------
$societe1 = new Societe;
//$societe1->villes = 'Paris'; // test - lorsque l'on tente d'affecter une valeur à une propriété qui n'éxiste pas, ca fonctionne et ajoute donc la propriété et sa valeur à l'objet société1.
//echo $societe1->titre; // erreur, undefine, la propriété n'éxiste pas ! 
//$societe1->methode(); // erreur fatal, la methode n'éxiste pas ! 
$societe1->pays = 'France';//déclenchement de la méthode __set() au lieu de la  création d'une nouvelle propriété
$societe1->ville = 'Paris';// La propriété éxiste, donc pas déclenchement de __set().
echo $societe1->pays; // Déclenche la methode __get() au lieu d'une erreur undefine.


echo '<div style="background-color: #f8d6d9;padding: 2px; margin-top:10px;">';
print('<pre>');
print_r($societe1);
print('</pre>');
echo '</div>';