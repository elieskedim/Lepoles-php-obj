<?php
trait TPanier{
    public $nbProduit = 1;

    public function affichageProduits(){
        return 'Affichage des produit. <br>';
    }
}
//------------------------------------------
trait TMembre{

    public function affichageMembres(){
        return 'Affichage des membres. <br>';
    }
}
//------------------------------------------
class Site{
    use TPanier, TMembre;//Utilisation des traits
}

$site = new Site;

echo $site->affichageProduits();
echo $site->nbProduit . '<br>';
echo $site->affichageMembres() . '<br>';
echo '<hr>';
var_dump($site);
echo '<hr>';
var_dump(get_class_methods($site));
echo '<hr>';
//------------------------------------------
/* 
Les traits on été inventés pour repousser les limites de l'héritage.
Une classe ne peut hériter que d'une seule classe à la fois. En revanche, elle peut importer(donc heriter) de plusieurs traits.
Il est utile d'utiliser les traits quand l'une de vos classe a besoin d'une methode 'X' de la classe A, 'y' de la classe B et 'z' de la classe C.

Un trait n'est pas instanciable.Un trait est un regroupement de methodes et de propriétés pouvant etre importées au sein  d'une classe.
*/
//------------------------------------------
trait TA{
    public function a(){
        return 'a';
    }
}

trait B{
    use TA;
    public function b(){
        return 'b';
    }
}

class  Test{
    use B;
}
//------------------------------------------
$obj = new Test;
echo $obj->a() . '<hr>';
echo $obj->b() . '<hr>';
//------------------------------------------
trait MonTrait{

    public function direBonjour(){
        echo 'Hello';
    }


}
class MaClass{
    use MonTrait;
    public function direBonjour(){
        echo 'Bonjour !';
    }
}
$objet = new MaClass;
$objet->direBonjour();
//Si une classe déclare une méthode et qu'elle utilise un trait possédant cette méthode, ALORS la methode déclarée dans la classe l'emportera sur la méthode déclarée dans le trait.

trait A{

    public function direBonjour(){
        echo 'Hello';
    }
}
class MaClass2{
    use A{
        DireBonjour as DireHello;
    }
}
$object = new MaClass2;
$object->direBonjour(). '<br>';
$object->direHello();