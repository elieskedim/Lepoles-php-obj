<?php
//Un repository centralise tout se qui touche à la récupération de vos entités. Concrètement, vous ne devez pas faire la moindre requête SQL ailleurs que dans un repository (c'est la règle).
//EntityRepository ne connait pas "employes" ou autre, il connait que des entités. cela doit donc rester générique afain que cela soit réutilisable.
namespace Manager;

//On utililse des USE lorsque l'on utilise des classes sans faire de 'new' directement dans le fichier courant.
use Manager/PDOManager;// On a besoin de PDOManager car en utilisant ce namespace, on a accès a tout ce qui est static de Manager/PDOManager. Le 'use' déclenche l'autoload pour que la classe soit chargée et ainsi eviter une erreur.
use PDO;// Nous utilisons ce namespace car on utilise les constantes et autres propriétés, function static de la class PDO

class EntityRepository{
    
    private $db;
    public function __construct(){}

        public function getDb(){

            if( !$this->db){
                $this->db = PDOManager::getInstance()->getPdo(); // getInstance() retourne un objet on peut donc mettre une fleche pour appeler une methode
            }
            return $this->pdo;
        }

        private function getTableName(){
            return 'employes';
        }

        public function find($id){
            $q = $this->getDb()->query('SELECT * FROM' . $this->getTableName() . ' Where id' . ucfirst($this->gatTableName()) . '=' . (int) $id);//id Employe le premier champs de notre table. Caster en 'int' permet d'éviter des erreurs de requete SQL

            $q->setFetchMode(PDO::FETCH_CLASS, 'Entity\\'. $this->getTableName());
            //PDO::FETCH_CLASS : permet d'instancier un objet (dans notre cas Entity/Employe)

            $r = $q->fetch();

            if(!$r){
                return false;
            }else{
                return $r;
            }
        }
}

