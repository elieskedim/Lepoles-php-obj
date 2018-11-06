<?php
final class Application{//'final' indique que la classe  Application NE POURRA PAS ETRE HERITEE.

    public function lancementApp(){
        return "L'appli se lance comme cela !";
    }
}
//class Extension extends Application{} // erreur, on ne peut pas hériter d'une classe "final"
$app = new Application;
echo $app->lancementApp();
echo '<hr>';
//-----------------------------------------------------------------------------
class Application2{
    final public function lancementApp(){
        return "L'appli se lance comme cela !";
    }
}
//-----------------------------------------------------------------------------
class Extension2 extends Application2{
   // public function lancementApp(){//erreur, one ne peut pas surcharger ou redefinir la méthode car elle est "final" dans la classe parente.
     //   return "L'appli se lance comme cela !";
  //  }
}

$extension2 = new Extension2;
echo $extension2->lancementApp();
//-----------------------------------------------------------------------------------
/* 
    Une classe finale NE PEUT ETRE héritée 
        Une classe finale aura forcément des méthodes qui ne pourront pas etre surchargées ou redéfinies. (Pas d'interet à mettre le mot-clè final sur les méthodes d'une classe final)
        Une classe final peut contenir des méthodes normales (mais cela n'a aucun interêt car on ne peut pas hériter d'une classe final donc il n'y a aucun risque que les methodes soit redéfinie).
        Une methode private avec le mot clé final n'as aucun interet (car on peut les modifier qu'a l'interieur de la classe, elle ne risque donc pas de pouvoir être surchargées).
    Une classe final reste instanciable !
    Une methode final peut-etre presente dans une classe normale
    Une méthode final permet d'éviter qu'elle soit surcharger ou redefini

    L'interet du mo clé final sur une méthode est de la verouiller afin d'empecher toutes sous classe de la redefinir (quand nous voulons etre sur que le comportement d'une methode est preserver duran l'héritage).
*/