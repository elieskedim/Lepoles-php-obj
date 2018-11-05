<?php

class Membre{
	private $pseudo;
	private $password;


	public function setPseudo($p){
		if(ctype_alpha($p) && strlen($p) < 15 && strlen($p) > 0){
        	$this->pseudo = $p;
		}else{
			echo "Veuillez comuniquer un pseuso valide";
		}
    }

    public function getPseudo(){
        return $this->pseudo;
    }

    public function setPassword($pass){//Par Convention, on nomme la fonction avec le mot clé "set", on va setter un prenom c'est à dire lui atribuer une valeur
        $this->password = $pass;
    }

    public function getPassword(){
        return $this->password;
    }
}

$user1 = new Membre;
$user1->setPseudo("23");
echo $user1->getPseudo() . '</br>';
$user1->setPassword('155987365');
echo $user1->getPassword() . '</br>';
//var_dump($user1);