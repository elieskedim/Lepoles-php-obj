<?php
class Homme {
    private $prenom;
    private $nom;

    public function setPrenom($p){//Par Convention, on nomme la fonction avec le mot clé "set", on va setter un prenom c'est à dire lui atribuer une valeur
        $this->prenom = $p;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setNom($n){//Par Convention, on nomme la fonction avec le mot clé "set", on va setter un prenom c'est à dire lui atribuer une valeur
        $this->nom = $n;
    }

    public function getNom(){
        return $this->nom;
    }
}
//------------------------------------------------------------------------------------------------------------
$homme1 = new Homme();
$homme1->setPrenom("Elies");
echo $homme1->getPrenom() . ' ';
$homme1->setNom("Kedim");
echo $homme1->getNom() . '</br>';

//------------------------------------------------------------------------------------------------------------
$homme2 = new Homme();
echo $homme2->getPrenom() . ' ';// Cette ligne n'affiche rien car j'ai réinstancier la classe Homme pour crée un obj homme2
echo $homme2->getNom() . '</br>';// Cette ligne n'affiche rien car j'ai réinstancier un nouvelle objet, sans avoir seter un prenom ou un nom. Donc aucune valeur n'est présente

//------------------------------------------------------------------------------------------------------------
/* Pourquoi des getters et les setters :
    PHP est un langages orienté objet qui ne type pas ces variables, il faut donc prévoir auttant de setter et getter qu'on à de propriété afain d controlé l'intégriter des données.    
*/