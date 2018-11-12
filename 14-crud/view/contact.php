<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?=$contact->prenom; ?></title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
    <header class="bg-dark pb-3">
        <h1 class="text-white text-center">Backoffice</h1>
    </header>
        <div class="container">
        <h1 class="mb-5"><?=$contact->prenom; ?></h1>
            <h2 class="border-bottom">Informations</h2>
            <ul class="list-group">
                <li class="list-group-item">Prenom : <?=$contact->prenom; ?></li>
                <li class="list-group-item">Nom : <?=$contact->nom; ?></li>
                <li class="list-group-item">Sexe : <?=$contact->sexe; ?></li>
                <li class="list-group-item">Service : <?=$contact->service; ?></li>
                <li class="list-group-item">Date embauche : <?=$contact->date_embauche; ?></li>
                <li class="list-group-item">Salaire : <?=$contact->salaire; ?></li>
            </ul>
        </div>
	</body>
</html>