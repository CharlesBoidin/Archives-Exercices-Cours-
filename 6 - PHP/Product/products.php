
<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<title>Document</title>
</head>

<body>

<div class="container">

<button value>
	<h2>Products</h2>

	<table class="table table-hover">
		<thead class="thead-dark">
		<tr>
			<th scope="col">#</th>
			<th scope="col"></th>
			<th scope="col"></th>
			<th scope="col"></th>
			<th scope="col">Category</th>
			<th scope="col">Actions</th>
		</tr>
		</thead>
		<tbody>
		<tr>

			<?php 
				//Connection à la Base de Donnée
				// lien avec votre fichier à vérifier
				require 'Connection2.php';
				$db = connect();
				

				try {
					// Préparation de la requete SQL
					$req = $db-> prepare ('SELECT products.id as IdProduct, products.name as NameProduct, products.price as PriceProduct, categories.name as Category
					FROM products, categories
					Where products.category_id = categories.id' );

					// Execution de la requete
					$req->execute();
				
					// Solution type Objet
					// Lecture des données et traitement sous forme de tableau
					while($data = $req->fetchObject()){
						echo '<tr> <th>'.$data->IdProduct.'</th> <td>'.$data->NameProduct.'</td><td>'.$data->PriceProduct.'</td><td>'.$data->Category.'</td><td>  
				
						<a href="read.php?id='.$data->IdProduct.'"><button class="btn btn-primary" type="submit" id="'.$data->IdProduct.'"  name="Lire" value="'.$data->IdProduct.'"><i class="fa fa-bars" aria-hidden="true"></i> Lire</button></a>
						<a href="modify.php?id='.$data->IdProduct.'"<button class="btn btn-warning" type="submit" id="'.$data->IdProduct.'"  name="Modifier" value="'.$data->IdProduct.'"><i class="fa fa-spinner" aria-hidden="true"></i> Modifier</button></a>
						<a href="delete.php?id='.$data->IdProduct.'"><button class="btn btn-danger" type="submit" id="'.$data->IdProduct.'" name="Supprimer" value="'.$data->IdProduct.'"><i class="fa fa-minus-square" aria-hidden="true"></i> Supprimer</button></a>
				
						</td>
						</tr>';}
					} 	
		
				catch(Exception $e) {
					echo $e->getMessage();
				}
			?>

			
		</tbody>
	</table>

	
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>