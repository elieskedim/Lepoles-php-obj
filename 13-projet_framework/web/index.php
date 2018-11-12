<?php
require_once(__DIR__ . '/../vendor/Autoload.php');

//Exemple de test :
//test 1:--------------------------------------------
	// $emp = new Entity\Employe;

	// var_dump($emp);

	// $emp->setPrenom('marco');
	// echo '<br>';
	// echo $emp->getPrenom();

//test 2:--------------------------------------------
	// $pdom = Manager\PDOManager::getInstance();

	// var_dump($pdom);

	// echo '<br>';
	// $pdom = Manager\PDOManager::getInstance();

	// var_dump($pdom);

//test 3:--------------------------------------------
	/* $er = new Manager\EntityRepository;

	var_dump($er);

	$result = $er->findAll();
	var_dump($result); */
//test 4: --------------------------------------------
	/* $employeR = new Repository\EmployeRepository;

	var_dump($employeR);

	$resultat = $employeR ->getAllEmploye();
	echo '<pre>';
	print_r($resultat);
	echo '</pre>'; */
//test 5: --------------------------------------------

	$c = new Controller\Controller;

	$resultat = $c->getRepository('employe');
	echo '<pre>';
	var_dump($resultat);
	echo '</pre>'; 
	
















