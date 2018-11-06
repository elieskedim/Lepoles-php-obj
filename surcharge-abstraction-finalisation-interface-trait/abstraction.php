<?php
abstract class Joueur{

    public function seConnecter(){
        return $this->etreMajeur();
    }
    abstract public function etreMajeur();// Les methodes abstraites n'ont pas de contenu
    abstract public function devise();// Les methodes abstraites n'ont pas de contenu
}

class JoueurFr extends Joueur{

    public function etreMajeur(){//OBLIGATION de redefinir la methode de ma classe parente sinon on obtien une erreur
        return 18;
    }

    public function devise(){
        return "euros";
    }
}

class JoueurUs extends Joueur{

    public function etreMajeur(){//OBLIGATION de redefinir la methode de ma classe parente sinon on obtien une erreur
        return 21;
    }

    public function devise(){
        return "dollards";
    }
}
//$joueur = new Joueur // erreur, une class abstraite n'est pas instanciable !!!

$joueurFr = new JoueurFr;
echo $joueurFr->seConnecter();
echo "<hr>";
$joueurUs = new JoueurUs;
echo $joueurUs->seConnecter();
echo "<hr>";
//----------------------------------------------------------------------------------------------------------------
/* 
* Une classe  abstraite N'EST PAS INSTANCIABLE !!
Les methodes abstraites N'ONT PAS DE CONTENU !
Lorsque l'on hérite de méthodes abstraites, nous sommes OBLIGES de les redefinir ! 
Pour définir des méthodes abstraites, il est NECESSAIRE de la CLASSE qui les CONTIENT soit ABSTRAITE !!! 
Par ailleur, une classe abstraite peut contenir des méthodes normales.
*/