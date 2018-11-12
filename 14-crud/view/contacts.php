<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Contacts</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
    <header class="bg-dark pb-3">
        <h1 class="text-white text-center">Backoffice</h1>
    </header>
		<div class="container mt-5">
		<div class="mb-3"><a class="btn btn-success" href="index.php?op=new">Ajouter un nouvel employe</a></div>
		    <table class="table">
    			<thead>
    				<tr>
    					<th>Prenom</th>
    					<th>Nom</th>
    					<th>Sexe</th>
    					<th>Service</th>
    					<th>Date embauche</th>
    					<th>Salaire</th>
    					<th>&nbsp;</th>
    				</tr>
    			</thead>
    			<tbody>
    				<?php foreach($contacts as $contact) :  ?>
    					<tr>
    						<td>
    							<a href="index.php?op=show&id=<?php echo $contact->id_employes; ?>">
    								<?php echo htmlentities($contact->prenom);  ?>
    							</a>
    						</td>
    						<td><?php echo htmlentities($contact->nom);  ?></td>
    						<td><?php echo htmlentities($contact->sexe);  ?></td>
    						<td><?php echo htmlentities($contact->service);  ?></td>
    						<td><?php echo htmlentities($contact->date_embauche);  ?></td>
    						<td><?php echo htmlentities($contact->salaire);  ?></td>
    						<td>
    							<a class="btn btn-danger" href="index.php?op=delete&id=<?php echo $contact->id_employes; ?>">
    								<i class="fas fa-times-circle"></i>
                                    delete
    							</a>
    							
    						</td>
    					</tr>
    				<?php endforeach; ?>
    			</tbody>
    		</table>
		</div>
	</body>
</html>