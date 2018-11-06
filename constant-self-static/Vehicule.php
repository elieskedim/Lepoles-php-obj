<?php
Class Vehicule{
    private static $marque = 'BMW';
    private $couleur = 'noir';

    public function setMarque($argMarque){
        self::$marque = $argMarque;//propriete static self::
    }

    public function getMarque(){
        return self::$marque;//propriete static self::
    }

    public function setCouleur($argCouleur){
        $this->couleur = $argCouleur;//propriete non static $this->
    }

    public function getCouleur(){
        return $this->couleur;//propriete non static $this->
    }
}
//-------------------------------------------------------------------------------------------------------------------
/* echo Vehicule::getMarque() . '</br>';
vehicule::setMarque('Renault');
echo Vehicule::getMarque() . '</br>'; 
    FAUX!!!!!!!!!!!!!!!!
*/

$vehicule1 = new Vehicule;
echo 'Vehicule 1 de marque : ' . $vehicule1->getMarque() . ' et de couleur ' . $vehicule1->getCouleur() . '<hr>';// BMW Noir

$vehicule2 = new Vehicule;
echo 'Vehicule 2 de marque : ' . $vehicule2->getMarque() . ' et de couleur ' . $vehicule2->getCouleur() . '<hr>';// BMW Noir

$vehicule3 = new Vehicule;
$vehicule3->setCouleur('Bleu');//modifcation sur l'objet en cour
echo 'Vehicule 3 de marque : ' . $vehicule3->getMarque() . ' et de couleur ' . $vehicule3->getCouleur() . '<hr>';//BMW Rouge

$vehicule4 = new Vehicule;
echo 'Vehicule 4 de marque : ' . $vehicule4->getMarque() . ' et de couleur ' . $vehicule4->getCouleur() . '<hr>';// BMW Noir

$vehicule5 = new Vehicule;
$vehicule5->setMarque('Mercedes');//modifcation sur l'objet en cour
echo 'Vehicule 5 de marque : ' . $vehicule5->getMarque() . ' et de couleur ' . $vehicule5->getCouleur() . '<hr>';//Mercedes Rouge

$vehicule6 = new Vehicule;
echo 'Vehicule 6 de marque : ' . $vehicule6->getMarque() . ' et de couleur ' . $vehicule6->getCouleur() . '<hr>';//Mercedes Rouge