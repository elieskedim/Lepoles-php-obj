<?php
// Singleton est un pattern qui permet de  donner une solution à plusieurs problèmes récurrents.
class Singleton{
    public $numero = 20;
    private static $instance = null;

    private function __construct(){// la classe N'EST PAS INSTANCIABLE car le constructeur est privé!!

    }

    public static function getInstance(){
        if(is_null(self::$instance)){// Si mon instance est null, se qui est le cas la première foi. Toutes les autres fois, je ne rentre pas dans le if car il y a maintenant un objet dans $instance
            self::$instance = new Singleton();
        }
        return self::$instance; // Dans tous les cas, ici je retourne un objet $instance
    }
}
//------------------------------------------------
//$s = new Singleton; // Erreur, normal car la fonction __construct() est en privé !!

$objet1 = Singleton::getInstance();
var_dump($objet1);
echo '<hr>';
$objet2 = Singleton::getInstance();
$objet2->numero = 10;
var_dump($objet2);
echo '<hr>';
$objet3 = Singleton::getInstance();
var_dump($objet3); 