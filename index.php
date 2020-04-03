<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title> Catálogo - Doce Gula </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="_css/master.css">
		<link rel="stylesheet" href="_css/index.css">
	</head>

	<body>
<?php
		include('componente/cabecalho.html');
?>
		<main class="py-5 bg-light">
			<section id="catalogo" class="my-5">
				<div class="container">
					<h1 class="mb-5 my-md-5 text-center display-4 text-secondary"> Catálogo </h1>

					<div class="row text-center quicksand">
						<div class="col-12 col-md-4 p-4 block">
							<img class="shadow" src="_img/main/index/1.jpg" alt="A La Carte">	
							<p class="text-secondary mb-0 mt-3"> A La Carte </p>
						</div>

						<div class="col-12 col-md-4 p-4 block">
							<img class="shadow" src="_img/main/index/2.jpg" alt="Parmegiana">	
							<p class="text-secondary mb-0 mt-3"> Parmegiana </p>
						</div>

						<div class="col-12 col-md-4 p-4 block">
							<img class="shadow" src="_img/main/index/3.jpg" alt="Escondidinho">	
							<p class="text-secondary mb-0 mt-3"> Escondidinho </p>
						</div>

						<div class="col-12 col-md-4 p-4 block">
							<img class="shadow" src="_img/main/index/4.jpg" alt="Pizza de Portuguesa">	
							<p class="text-secondary mb-0 mt-3"> Pizza de Portuguesa </p>
						</div>

						<div class="col-12 col-md-4 p-4 block">
							<img class="shadow" src="_img/main/index/5.jpg" alt="Pizza de Calabresa">	
							<p class="text-secondary mb-0 mt-3"> Pizza de Calabresa </p>
						</div>

						<div class="col-12 col-md-4 p-4 block">
							<img class="shadow" src="_img/main/index/6.jpg" alt="Pizza de Mussarela">	
							<p class="text-secondary mb-0 mt-3"> Pizza de Mussarela </p>
						</div>
					</div>
				</div>
			</section>
		</main>
<?php
		include('componente/rodape.html');
?>
	</body>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="_js/master.js"></script>
</html>