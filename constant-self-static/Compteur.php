<?php
class Compteur{
    public static $nbInstanceClass = 0;
    public $nbInstanceObjet = 0;

    public function __construct(){
        ++self::$nbInstanceClass;
        ++$this->nbInstanceObjet;
    }
}
//----------------------------------------------------------------
$compteur1 = new Compteur;// nbInstanceClass à 1 - nbInstanceObjet à 1
echo '<h2>Compteur1</h2>';
echo 'nbInstanceClass à ' . Compteur::$nbInstanceClass . '<br>';
echo 'nbInstanceObjet à ' . $compteur1->nbInstanceObjet . '<br> <hr>';
$compteur2 = new Compteur;// nbInstanceClass à 2 - nbInstanceObjet à 1
echo '<h2>Compteur2</h2>';
echo 'nbInstanceClass à ' . Compteur::$nbInstanceClass . '<br>';
echo 'nbInstanceObjet à ' . $compteur1->nbInstanceObjet . '<br> <hr>';
$compteur3 = new Compteur;// nbInstanceClass à 3 - nbInstanceObjet à 1
echo '<h2>Compteur3</h2>';
echo 'nbInstanceClass à ' . Compteur::$nbInstanceClass . '<br>';
echo 'nbInstanceObjet à ' . $compteur1->nbInstanceObjet . '<br> <hr>';
$compteur4 = new Compteur;// nbInstanceClass à 4 - nbInstanceObjet à 1
echo '<h2>Compteur4</h2>';
echo 'nbInstanceClass à ' . Compteur::$nbInstanceClass . '<br>';
echo 'nbInstanceObjet à ' . $compteur1->nbInstanceObjet . '<br> <hr>';
$compteur5 = new Compteur;// nbInstanceClass à 5 - nbInstanceObjet à 1
echo '<h2>Compteur5</h2>';
echo 'nbInstanceClass à ' . Compteur::$nbInstanceClass . '<br>';
echo 'nbInstanceObjet à ' . $compteur1->nbInstanceObjet . '<br> <hr>';

/* 
    La classe à 'produit' 5 objets
    Chaques objet à été produit 1 seul foi

    Exemple: Une femme  à 5 enfants, donc elle est maman 5 fois! Chacun de ces enfants est né uUNE SEULE FOIS.
    Ici la class serait la mère qui a eu 5 enfants et chaques objet serait un enfant nés une fois chacun.
*/