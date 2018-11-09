<?php
// Cette class contiendra les méthodes de 'Employe.php' et demandera l'exécution à EntityRepository

namespace Repository;

use Manager\EntityRepository; // l'utilisation du namespace permet d'extends la class lors de l'héritage alors qu'il n'y a pas au d'instruction.

class EmployeRepository extends EntityRepository{
    public function getAllEmploye(){
        return $this->findAll(); // findAll() provient de EntityRepository
    }
    public function getFindEmploye($id){
        return $this->find($id); // findAll($id) provient de EntityRepository
    }
    public function registerEmploye(){
        return $this->register(); // register() provient de EntityRepository
    }
}