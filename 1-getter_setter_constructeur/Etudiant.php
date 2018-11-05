<?php

class Etudiant{
	private $prenom;

	public function __construct($arg){
		//__construct() : méthode appelée automatiquement lors d'une instanciation de la classe ('new').$

		$this->setPrenom($arg);
		echo "Instanciation, nous avons reçu l'information suivante : $arg";
	}

	public function setPrenom($arg){
		$this->prenom = htmlentities($arg);
	}

	public function getPrenom(){
		return $this->prenom;
	}
}
//---------------------------------------------------------------------------------------------------------------------------
$etudiant1 = new Etudiant("<script>alert('Elies');</script>");
echo $etudiant1->getPrenom();