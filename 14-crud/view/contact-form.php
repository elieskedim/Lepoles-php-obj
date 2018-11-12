<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?=$title; ?></title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
    <header class="bg-dark pb-3">
        <h1 class="text-white text-center">Backoffice</h1>
    </header>
        <div class="container mt-5">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" class="form-control" id="prenom" value="<?= $prenom; ?>" placeholder="Jean">
                </div>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" value="<?= $nom; ?>"  placeholder="Dupont">
                </div>
                <div class="form-group row">
                    <span class="ml-5">Homme :</span>
                    <input type="radio" class="form-control col" name="sexe" value="<?= $sexe; ?>"  placeholder="nom :">
                    <span>Femme :</span>
                    <input type="radio" class="form-control col" name="sexe" value="<?= $sexe; ?>"  placeholder="nom :">
                </div>
                <div class="form-group">
                    <label for="date">Date D'embauche</label>
                    <input type="date" class="form-control" id="date" value="<?= $date_embauche; ?>" placeholder="Jean">
                </div>
                <div class="form-group">
                    <label for="service">Service</label>
                    <select class="form-control form-control-lg" value="<?= $service; ?>">
                         <option>Direction</option>
                         <option>Secretariat</option>
                         <option>Commerciale</option>
                         <option>Informatique</option>
                         <option>Maintenance</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="salaire">Salaire</label>
                    <input type="text" class="form-control" id="salaire" value="<?= $salaire; ?>"  placeholder="2000">
                </div>
                <button type="submit" class="btn btn-success">Ajouter</button>
            </form>
        </div>
	</body>
</html>