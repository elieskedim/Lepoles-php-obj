<?php
class Membre{
    public $id = 10;
    public $pseudo;
    public $mdp;

    public function __construct(){
        echo "Internaute ! <br>";
    }

    public function inscription(){
        return "Je m'inscris ! <br>";
    }

    public function connexion(){
        return "Je me connecte ! <br>";
    }
}

class Admin extends Membre{
    public function accesBackOffices(){
        return 'Acces BackOffice ! <br>';
    }
}

$admin1 = new Admin; 