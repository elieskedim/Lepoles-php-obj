<?php
// Surcharger (override) : Une surcharge me permet de prendre en compte le comportement de ma fonction d'origine, et on vas pouvoir lui ajouter des traitement complémentaire.
class A{

    public function calcul(){
        return 10;
    }
}

class B extends A{

    public function calcul(){//Redéfinition
        $n = parent::calcul();//parent:: fonctionne donc pour appeler une méthode d'une classe parente LORS d'une surcharge. (afin d'éviter quelle ne s'appelle elle même avec $this->calcul())
        //On n'utiliseras pas $this->calcul(), sinon la fonction sera récursive et la méthode s'appelera en boucle.
        //self::calcul() ne fonctionnerais pas non plus, car on essayerait d'appeler un element de la classe courante (alors qu'ici on as besoin de la classe parente)

        if($n <= 100){
            return "$n est inférieur  ou égale à 100";
        }else{
            return "$n est superieur à 100";
        }
    }

    public function autreCalcul(){
        $nb = parent::calcul();// Il est possible d'ateindre une méthode de mon parrent, même s'il n'y a pas de surcharge
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surcharge</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
    body{
        background-color: #eee;
    }
    </style>
</head>
<body>
<div class="container">
<?php
    $objetB = new B;
echo $objetB->calcul();
//affiche 10 est inferieur à 100 - j'ai redéclaré la méthode calcul() dans la classe fille(B), cela s'appel une surcharge, je modifie légèrement le comportement initial contenu dans le parent (A) vias l'enfant (B)
/* Une surcharge permet de prendre en compte le comportement de la méthode héritée afin d'en bénéficier, tout en apportant un traitement complémentaire.
    différence entrez self:: et parent:: on demande d'utiliserce qui est la Classe courante ou ce que l'on à hérité sans l'avoir redéfinie dans note class. Et il faut que cela appartiennent a la classe.
    Quand on utilise : parent:: on demande d'utiliser les element de la classe parente
*/
?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
