<?php
	if(isset($_POST["btn-form"])){
		$servidor = "localhost";
		$usuari = "root";
		$password = "";
		$db = "futbol";

		$nom = $_POST['nombre'];
		$localitat = $_POST['localitat'];
		$web = $_POST['web'];
		$escut = $_POST['escut'];

		
		// Create connection
		$conn = new mysqli($servidor, $usuari, $password, $db);
		
		// Check connection
		if ($conn->connect_error) {
			die("Connexió KO: " . $conn->connect_error);
		} else {
				$sql = "INSERT INTO equips (nom, localitat, web, escut) VALUES('" . $nom . "','" . $localitat . "','" . $web . "','". $escut . "')";

				if ($conn->query($sql) === TRUE) {
					echo "Registre creat amb èxit";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}

			$conn->close();
		}
	}
?>
﻿<!DOCTYPE HTML>  
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	</head>
	<body>  
	<nav class="navbar navbar-dark bg-primary">
			<a class="navbar-brand mb-0 h1" href="./">LUIS ALEJO BALBUENA</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="./">Inicio <span class="sr-only">(current)</span></a>
					</li> 
					<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Mostrar
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="./mostrar1.php">Mostrar 1</a>
							<a class="dropdown-item" href="./mostrar2.php">Mostrar 2</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./formulari.php">Insertar</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./modificar.php">Modificar</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./eliminar.php">Eliminar</a>
					</li>
				</ul>
			</div>
		</nav>

		<form  name="formulari1" method="POST" action="formulari.php">
  <div class="form-group">
    <label>Nom</label>
    <input type="text" class="form-control" name="nombre"placeholder="Nombre">
  </div>
  <div class="form-group">
    <label>Localitat</label>
    <input type="text" class="form-control" name="localitat" placeholder="Localitat">
  </div>
  <div class="form-group">
    <label>Web</label>
    <input type="text" class="form-control" name="web" placeholder="Web">
  </div>
  <div class="form-group">
    <label>Escut</label>
    <input type="text" class="form-control" name="escut" placeholder="Escut">
  </div>
  <button type="submit" name="btn-form" class="btn btn-primary">Aplicar</button>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	</body>
</html>