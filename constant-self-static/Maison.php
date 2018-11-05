<?php

class Maison{
	public static $espaceTerrain = '500m²';// appartien à la classe
	public $couleur = 'blanc'; // appartien à l'objet
	private static $nbPiece = 7; // appartient à la class
	private $nbPorte = 10; // appartient à l'objet
	const HAUTEUR = '10m';//appartient à la class



	public static function getNombrePiece(){
		return self::$nbPiece;// l'ors d'un self::, il faut mettre le $ devant la propriété
	}

	public function getNbPorte(){
		return $this->nbPorte;
	}
}
//-----------------------------------------------------------------------------
echo 'nbPiece : ' . Maison::getNombrePiece() . '<hr>';// j'appelle une méthode de ma class par ma class

echo 'espaceTerrain : ' . Maison::$espaceTerrain . '<hr>';

$maison1 = new Maison;
echo 'couleur : ' . $maison1->couleur . '<hr>'; //j'appel une propriété de mon objet par mon objet
echo 'nbPorte : ' . $maison1->getNbPorte() . '<hr>'; //j'appel une propriété de mon objet par mon objet
echo 'Hauteur : ' . Maison::HAUTEUR . '<hr>';

//echo $maison1->espaceTerrain; erreur on ne peux pas appeler une propriété static par mon objet
// echo Maison::$couleur; erreur, on ne peut pas appeler une propriété public avec ma classe
// echo Maison::getNbPorte() erreur, on ne peut pas appeler une méthode public avec ma classe
//echo $maison1->getNombrePiece(); Ne met pas d'erreur... mais n'est pas une bonne pratique car quand il y a le mot statique il faut l'appeler par les deux points
//echo $maison1::$espaceTerrain; Ne met pas d'erreur... Mais à ne surtout pas faire! on n'appel pas de méthode static directement sur l'objet mais sur la class Maison::$ecpaceTerrain

//-------------------------------------------------------------------------------------------------
/*
Opérateurs: 
	$objet->element d'un objet à l'éxtérieur de la classe
	$yhis->element d'un objet à l'intérieur de la classe

	class::$element d'une classe à l'éxterieur de la classe
	self::$element d'une classe à l'intérieur de la classe

2 Questions à se poser:
	Est-ce que c'est qtatic ?
		Si Oui => self::, class::

		Est-ce que c'est utiliser dans la classe?
			Si OUI : self::
			Si NON : Clas::

	Si non: => $objet->, $this->
		Est-ce que c'est utiliser dans la classe ?
			Si OUI : $this->
			Si NON : $objet->

Precision :
	STATIC : indique d'un élement appartient à la classe
	CONST : indique qu'un element appartient à la  classe
*/