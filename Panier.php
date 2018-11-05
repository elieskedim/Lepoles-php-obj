<?php
//Une class permet de produire plusieurs objets. Par convention, une classe sera nommée avec la première lettre en MAJUSCULE.
class Panier{
    public $nombreProduit; //propriété

    public function ajouterArticle(){//Méthode
        //Traitements
        return "l'article a bien été ajouté !";
    }

    protected function retirerArticle(){
        //traitements
        return "L'article a bien été retiré !";
    }

    private function affichageArticle(){
        //traitements
        return "Voici les articles";
    }
}
//------------------------------------------------------------------------------------------

$panier1 = new Panier; //new Panier permet d'instancier notre class en un objet (permet de déployer l'objet issue de la classe
var_dump($panier1);
$panier1->nbProduit = 5;
echo '</br>Panier1 : ' .$panier1->nbProduit . ' Produit</br>'; // appel de la propriété public
echo '</br>Panier1 : ' .$panier1->ajouterArticle() . '</br>';

$panier2 = new Panier;
var_dump($panier2);
$panier2->nbProduit = 10;

//----------------------------------------------------------------------------------------------
/*
*Niveau de visibilité:
*   public : accessible uniquement dans la classe ou cela a été déclaré ET aussi dans les classes héritières
*   private : accessible uniquement dans la classe permet de produire plusieurs objets et donc nous pouvons effectuer plusieurs instanciation 'new'
*   new : mot-clé permettant d'éffectuer une instancioation (et donc de créer un objet)