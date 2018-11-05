<?php

class Voiture{
	private $litreEssence;

	public function setLitres($arg){
		if(is_numeric($arg)){
			if ($arg <= 50) {
				if ($this->litreEssence <= 50) {
				$this->litreEssence = $arg;
				}else{
					$this->litreEssence = 50;
					echo "La voiture est pleine";
				}
			}else{
				echo "Tu essaye de mettre trop d'essence max 50";
			}
		}else{
			echo "Veuillez entrez un chiffre";
		}
		
	}

	public function getLitres(){
		return $this->litreEssence;
	}
}

/**
 * 
 */
class Pompe
{
	private $litreEssence;


	public function setLitres($arg){
		$this->litreEssence = $arg;
	}

	public function getLitres(){
		return $this->litreEssence;
	}

	public function donner(Voiture $target){// On éxige une argument de type Voiture
		$this->setLitres($this->getLitres() - (50 - $target->getLitres()));
		$target->setLitres($target->getLitres() + (50 - $target->getLitres()));
	}
}

$voiture1 = new Voiture;
$voiture1->setLitres(5);
echo $voiture1->getLitres() . '</br>';
//var_dump($voiture1);

$pompe1 = new Pompe;
$pompe1->setLitres(800);
echo $pompe1->getLitres(). '</br>';
$pompe1->donner($voiture1);

echo $voiture1->getLitres() . '</br>';

echo $pompe1->getLitres(). '</br>';
//var_dump($pompe1);

$voiture2 = new Voiture;
$voiture2->setLitres(32);
echo $voiture2->getLitres() . '</br>';
$pompe1->donner($voiture2);

echo $voiture2->getLitres() . '</br>';

echo $pompe1->getLitres(). '</br>';