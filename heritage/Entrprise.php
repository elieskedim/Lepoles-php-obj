<?php
class Plombier{
    public function getSpecialite(){
        return 'Tuyaux, robinet, compteur, etc... <br>';
    }

    public function getHoraire(){
        return '8h00-19h00';
    }
}

class Electricien{
    public function getSpecialite(){
        return 'Disjoncteur, pose de cable, tableaux éléctrique, etc... <br>';
    }

    public function getHoraire(){
        return '10h00-18h00';
    }
}

class Entreprise{
// La classe Entreprise n'as pas d'héritage
public $numero = 0;

public function appelEmploye($employe){
    $this->numero++;
    $this->{"monEmploye" . $this->numero} = new $employe;
    // 1er appel : je déclare la variable  $this->monEmploye1 = new Plombier
    return $this->{"monEmploye" . $this->numero};
}
}?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entreprise</title>
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
    $entreprise = new Entreprise;

    $entreprise->appelEmploye('Plombier');
    var_dump($entreprise);
    echo '<br>';
    echo $entreprise->monEmploye1->getSpecialite() . "<hr>";

    $entreprise->appelEmploye('Electricien');
    var_dump($entreprise);
    echo '<br>';
    echo $entreprise->monEmploye2->getSpecialite() . "<hr>";
?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>