<?php
interface Mouvement{

    public function deplacement();
}
//******************************************** */
class Bateau implements Mouvement{//class Bateua extends Mouvement NE FONCTIONNE PAS

    public function deplacement(){//Obligation de recréer les méthodes de l'interface qu'on implémente pour éviter une erreur
    }
}

class Avion implements Mouvement{

    public function deplacement(){//Obligation de recréer les méthodes de l'interface qu'on implémente pour éviter une erreur

    }
}
//-------------------------------------------------------------------------------
//new Mouvement;//erreur, une interface n'est pas instanciable.
//-------------------------------------------------------------------------------
/* 
Une interface : est une liste de méthodes (SANS CONTENUE) qui permet de garantir que toutes les classes qui implémentes l'interface contiendront les méthode de l'interface avec la même signature(Le même nom !) C'est une sorte de 'contrat' qui garantie un minimum de méthode avec la bonne orthographe.
    Note: Une interface n'est pas un héritage.
             Un Bateau hérite de Véhicule
             Mais un Bateau n'hérite pas de Mouvement, c'est juste un point commun entre ces classes (Bateau, Avion, ...)

    Le développeur qui réalise les appels est certain de pouvoir effectuer :
        $bateau->deplacement();
    Il sait qu'avec l'interface il ne devra pas faire $bateau->seDeplacer(); donc pas besoin d'ouvrir la classe en question. Et il ne devrais pas créer dans la class Bateau une méthode seDeplacer().
    Une interface permet de créer une formalité.
    Si le code des classes doit changer, cela ne changera pas les appels car la méthode déplacement() devra toujours être présente.

- class extends class (heritage)
- interface extends  interface (heritage)
- class implements interface (implementation)

Les interfaces permettent de créer du code qui spécifie quelles méthodes une classe doit implémenter.
Toutes les méthodes déclarées dans une interface DOIVENT ETRE 'public' et redefinies dans la classe qui l'implémente.
Lorsque je veux me servir d'une interface: j'utilise le mot-clé 'implements' (pour une class  on utilise extends*) 
Une interface n'est pas instanciable ! 
On se sert d'une interface pour représenter un point commun entre 2 classes. Cela permet d'exiger un comportement.
    exemple: Un bateau et un avion hértie de Vehicule Mais n'hérite pas de mouvement. Un véhicule et un mouvement n'héxiste pas.

Il est possible d'implémenter plusieurs interface (on ne peut pas hérité de plusieurs classes)
PAS DE POSSIBILITE d'avoir des propriétés dans une interface. (on peut par contre, déclarer des constantes dans une interface).
*/
//--------------------------------------------------------------------------------
//Implementation de plusieurs interfaces:
interface iA{
    public function testA();//Pas de visibilité private car les méthodes doivent être redefinie.
}
interface iB{
    public function testB();
}
class A implements iA, iB{// implementation de 2 interfaces A CONDITION que celle-ci n'aient aucune méthode portant le même nom !!!!

    public function testA(){

    }
    public function testB(){
        
    }
}
//---------------------------------------------------------------------------------
interface iC{
    public function testC();
}
interface iD{
    public function testD();
}
interface iE extends iC, iD{//heritage multiple d'interfaces
    public function testE();
}

class B implements iE{
    //Pour gérer les erreurs, il faut absolument écrire les méthodes de iE, iC et iD
    public function testC(){}
    public function testD(){}
    public function testE(){}
}
//------------------------------------------------------------------------------------
//heritage + implementation
class C{}
class D extends C implements iA{
    public function testA(){}
}